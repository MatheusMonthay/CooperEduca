<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XpRecord extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'xp_amount', 'source', 'sourceable_id', 'sourceable_type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sourceable()
    {
        return $this->morphTo();
    }
}