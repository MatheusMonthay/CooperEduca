<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao'];

    public function modulos()
    {
        return $this->hasMany(Modulo::class)->orderBy('ordem');
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function userProgress()
    {
        return $this->hasMany(UserCourseProgress::class);
    }

    public function getProgressForUser($userId)
    {
        $completedModules = $this->userProgress()
            ->where('user_id', $userId)
            ->where('completed', true)
            ->count();

        $totalModules = $this->modulos->count();

        return $totalModules > 0 ? round(($completedModules / $totalModules) * 100) : 0;
    }

    public function isCompletedByUser($userId)
    {
        $totalModules = $this->modulos->count();
        $completedModules = $this->userProgress()
            ->where('user_id', $userId)
            ->where('completed', true)
            ->count();

        // Verifica se completou todos os módulos e pelo menos um quiz
        return ($totalModules > 0 && $completedModules >= $totalModules) && 
               $this->quizzes()->whereHas('attempts', function($q) use ($userId) {
                   $q->where('user_id', $userId);
               })->exists();
    }
}