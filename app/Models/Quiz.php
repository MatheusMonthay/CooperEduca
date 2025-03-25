<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['curso_id', 'titulo', 'descricao', 'total_questions', 'xp_per_question', 'is_active'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function attempts()
    {
        return $this->hasMany(UserQuizAttempt::class);
    }
}
