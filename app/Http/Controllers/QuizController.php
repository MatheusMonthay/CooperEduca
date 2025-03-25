<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\UserQuizAttempt;
use App\Models\XpRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function show($curso_id, $quiz_id)
    {
        $quiz = Quiz::with('questions')->where('curso_id', $curso_id)->findOrFail($quiz_id);
        
        // Verifica se o usuário já completou este quiz
        $hasAttempted = UserQuizAttempt::where('user_id', Auth::id())
            ->where('quiz_id', $quiz_id)
            ->exists();
            
        if ($hasAttempted) {
            return redirect()->route('cursos.show', $curso_id)
                ->with('error', 'Você já completou este quiz.');
        }

        return view('quizzes.show', compact('quiz', 'curso_id'));
    }

    public function store(Request $request, $curso_id, $quiz_id)
    {
        $quiz = Quiz::with('questions')->findOrFail($quiz_id);
        $user = Auth::user();
        
        // Verifica se o usuário já completou este quiz
        $hasAttempted = UserQuizAttempt::where('user_id', $user->id)
            ->where('quiz_id', $quiz_id)
            ->exists();
            
        if ($hasAttempted) {
            return redirect()->route('cursos.show', $curso_id)
                ->with('error', 'Você já completou este quiz.');
        }

        $score = 0;
        $totalQuestions = $quiz->questions->count();
        
        foreach ($quiz->questions as $question) {
            $userAnswer = $request->input('question_'.$question->id);
            if ($userAnswer === $question->correct_option) {
                $score++;
            }
        }
        
        $xpEarned = $score * $quiz->xp_per_question;
        
        // Registrar a tentativa do quiz
        UserQuizAttempt::create([
            'user_id' => $user->id,
            'quiz_id' => $quiz_id,
            'score' => $score,
            'total_xp_earned' => $xpEarned,
            'completed_at' => now(),
        ]);
        
        // Adicionar XP ao usuário
        XpRecord::create([
            'user_id' => $user->id,
            'xp_amount' => $xpEarned,
            'source' => 'quiz',
            'sourceable_id' => $quiz_id,
            'sourceable_type' => Quiz::class,
        ]);
        
        // Atualizar XP total do usuário
        $user->total_xp += $xpEarned;
        $user->save();
        
        return redirect()->route('quizzes.result', [$curso_id, $quiz_id, $score]);
    }

    public function result($curso_id, $quiz_id, $score)
    {
        $quiz = Quiz::findOrFail($quiz_id);
        $totalQuestions = $quiz->questions->count();
        $percentage = round(($score / $totalQuestions) * 100);
        $xpEarned = $score * $quiz->xp_per_question;
        
        return view('quizzes.result', compact('curso_id', 'quiz', 'score', 'totalQuestions', 'percentage', 'xpEarned'));
    }
}
