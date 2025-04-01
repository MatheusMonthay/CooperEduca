<?php

namespace App\Http\Controllers;

use App\Mail\WeeklyRankingNotification;
use App\Models\User;
use App\Models\WeeklyTop3History;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RankingController extends Controller
{

    public function testRankingEmail(Request $request)
{
    $request->validate([
        'position' => 'required|integer|between:1,3'
    ]);

    $user = $request->user();
    $position = $request->position;

    try {
        Mail::to($user->email)->send(
            new WeeklyRankingNotification($user, $position)
        );
        
        return back()->with('success', 'E-mail de teste (como '.$position.'º lugar) enviado com sucesso! Verifique sua caixa de entrada.');
    } catch (\Exception $e) {
        return back()->with('error', 'Erro ao enviar e-mail: '.$e->getMessage());
    }
}
    public function weekly()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        
        // Obter ranking atual
        $ranking = User::withSum(['xpRecords' => function($query) use ($startOfWeek, $endOfWeek) {
            $query->whereBetween('created_at', [$startOfWeek, $endOfWeek]);
        }], 'xp_amount')
        ->orderBy('xp_records_sum_xp_amount', 'desc')
        ->take(10)
        ->get();
        
        // Salvar top 3 no histórico (apenas uma vez por semana)
        $this->saveTop3History($startOfWeek, $ranking);
        
        return view('ranking.weekly', compact('ranking'));
    }
    
    public function history()
    {
        // Alterar de get() para paginate()
        $history = WeeklyTop3History::orderBy('week_start_date', 'desc')
                                   ->paginate(8); 
        
        return view('ranking.history', compact('history'));
    }
    
    protected function saveTop3History($weekStart, $ranking)
{
    // Verificar se já foi salvo para esta semana
    $exists = WeeklyTop3History::where('week_start_date', $weekStart->format('Y-m-d'))->exists();
    
    if (!$exists && $ranking->count() >= 3) {
        $top3 = $ranking->take(3)->map(function($user, $index) {
            $position = $index + 1;
            
            // Enviar e-mail para o usuário
            Mail::to($user->email)->send(
                new WeeklyRankingNotification($user, $position)
            );
            
            return [
                'user_id' => $user->id,
                'name' => $user->name,
                'xp' => $user->xp_records_sum_xp_amount ?? 0,
                'position' => $position,
                'prize_claimed' => false // Marcar como não reivindicado ainda
            ];
        });
        
        WeeklyTop3History::create([
            'week_start_date' => $weekStart,
            'top3_users' => $top3
        ]);
    }
}
}