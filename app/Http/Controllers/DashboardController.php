<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\UserCourseProgress;
use App\Models\WeeklyTop3History;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index($tab = 'progress')
    {
        $user = Auth::user();

        // Cursos iniciados pelo usuário (com pelo menos um módulo acessado)
        $startedCourses = Curso::whereHas('userProgress', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
            ->with(['modulos', 'userProgress' => function ($query) use ($user) {
                $query->where('user_id', $user->id);
            }])
            ->get();

        // Cursos em andamento
        $inProgress = $startedCourses->map(function ($curso) use ($user) {
            $completedModules = $curso->userProgress
                ->where('completed', true)
                ->count();

            $totalModules = $curso->modulos->count();
            $progress = $totalModules > 0 ? round(($completedModules / $totalModules) * 100) : 0;

            return [
                'curso' => $curso,
                'progress' => $progress,
                'next_module' => $curso->modulos
                    ->whereNotIn('id', $curso->userProgress->pluck('modulo_id'))
                    ->first()
            ];
        })->filter(function ($course) {
            return $course['progress'] < 100;
        });

        // Cursos concluídos
        $completed = $startedCourses->filter(function ($curso) use ($user) {
            $totalModules = $curso->modulos->count();
            $completedModules = $curso->userProgress
                ->where('user_id', $user->id)
                ->where('completed', true)
                ->count();

            $quizCompleted = $curso->quizzes()
                ->whereHas('attempts', function ($q) use ($user) {
                    $q->where('user_id', $user->id);
                })
                ->exists();

            return ($totalModules > 0 && $completedModules >= $totalModules) && $quizCompleted;
        });

        return view('dashboard', compact('inProgress', 'completed', 'tab'));
    }
}