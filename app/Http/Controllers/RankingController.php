<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function weekly()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        
        $ranking = User::withSum(['xpRecords' => function($query) use ($startOfWeek, $endOfWeek) {
            $query->whereBetween('created_at', [$startOfWeek, $endOfWeek]);
        }], 'xp_amount')
        ->orderBy('xp_records_sum_xp_amount', 'desc')
        ->take(10)
        ->get();
        
        return view('ranking.weekly', compact('ranking'));
    }
}