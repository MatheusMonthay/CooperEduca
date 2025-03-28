<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WeeklyTop3History;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RankingController extends Controller
{
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
            $top3 = $ranking->take(3)->map(function($user) {
                return [
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'xp' => $user->xp_records_sum_xp_amount ?? 0
                ];
            });
            
            WeeklyTop3History::create([
                'week_start_date' => $weekStart,
                'top3_users' => $top3
            ]);
        }
    }
}