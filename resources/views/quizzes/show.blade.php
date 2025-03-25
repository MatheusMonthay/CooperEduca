@extends('layouts.app')

@section('content')
<div class="container">
    <div class="quiz-container">
        <h1>{{ $quiz->titulo }}</h1>
        <p>{{ $quiz->descricao }}</p>
        
        <form method="POST" action="{{ route('quizzes.store', ['curso_id' => $curso_id, 'quiz_id' => $quiz->id]) }}">
            @csrf
            
            @foreach($quiz->questions as $index => $question)
                <div class="question-card">
                    <h3>Pergunta {{ $index + 1 }}:</h3>
                    <p>{{ $question->question_text }}</p>
                    
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_a_{{ $question->id }}" value="a">
                            <label class="form-check-label" for="option_a_{{ $question->id }}">
                                A) {{ $question->option_a }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_b_{{ $question->id }}" value="b">
                            <label class="form-check-label" for="option_b_{{ $question->id }}">
                                B) {{ $question->option_b }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_c_{{ $question->id }}" value="c">
                            <label class="form-check-label" for="option_c_{{ $question->id }}">
                                C) {{ $question->option_c }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_d_{{ $question->id }}" value="d">
                            <label class="form-check-label" for="option_d_{{ $question->id }}">
                                D) {{ $question->option_d }}
                            </label>
                        </div>
                    </div>
                </div>
            @endforeach
            
            <button type="submit" class="btn btn-primary">Enviar Respostas</button>
        </form>
    </div>
</div>
@endsection