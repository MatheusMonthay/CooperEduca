<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyTop3History extends Model
{
    use HasFactory;

    protected $fillable = [
        'week_start_date',
        'top3_users'
    ];

    protected $table = 'weekly_top3_history';

    protected $casts = [
        'top3_users' => 'array',
        'week_start_date' => 'date'
    ];
}