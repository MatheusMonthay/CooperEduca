@extends('layouts.app')

@section('content')
<div class="container">
    <div class="quiz-result-container">
        <h1>Resultado do Quiz: {{ $quiz->titulo }}</h1>
        
        <div class="result-card">
            <h2>Sua Pontuação</h2>
            <p class="score">{{ $score }} / {{ $totalQuestions }}</p>
            <p class="percentage">{{ $percentage }}% de acerto</p>
            <p class="xp-earned">Você ganhou {{ $xpEarned }} XP!</p>
            
            <a href="{{ route('cursos.show', ['curso_id' => $curso_id]) }}" class="btn btn-primary">
                Voltar para o Curso
            </a>
            
            <a href="{{ route('ranking.weekly') }}" class="btn btn-secondary">
                Ver Ranking Semanal
            </a>
        </div>
    </div>
</div>
@endsection