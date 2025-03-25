@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Coluna esquerda com a lista de módulos -->
        <div class="col-md-3">
            <div class="curso-titulo">
                <h2>{{ $curso->nome }}</h2>
            </div>
            <div class="modulos-lista">
                <ul>
                    @foreach($modulos as $modulo)
                        <li>
                            <a href="{{ route('cursos.show', ['curso_id' => $curso->id, 'modulo_id' => $modulo->id]) }}"
                               class="{{ $moduloAtual->id === $modulo->id ? 'ativo' : '' }}">
                                {{ $modulo->titulo }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Coluna direita com o conteúdo do módulo selecionado -->
        <div class="col-md-9">
            <div class="modulo-conteudo">
                <h1>{{ $moduloAtual->titulo }}</h1>
                <div class="conteudo-modulo">
                    {!! markdown_to_html($moduloAtual->conteudo) !!}
                </div>

                <!-- Navegação entre módulos - BOTÕES NA MESMA LINHA -->
                <div class="navigation-buttons mt-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Botão Voltar -->
                        @if($moduloAtual->ordem > 1)
                            @php
                                $moduloAnterior = $modulos->where('ordem', $moduloAtual->ordem - 1)->first();
                            @endphp
                            <a href="{{ route('cursos.show', ['curso_id' => $curso->id, 'modulo_id' => $moduloAnterior->id]) }}" 
                               class="btn btn-outline-primary navigation-btn">
                                <i class="fas fa-arrow-left"></i> Voltar
                            </a>
                        @else
                            <div class="empty-space"></div> <!-- Espaço vazio para alinhamento -->
                        @endif

                        <!-- Botão Próximo ou Iniciar Quiz -->
                        @if($moduloAtual->ordem < $modulos->last()->ordem)
                            @php
                                $proximoModulo = $modulos->where('ordem', $moduloAtual->ordem + 1)->first();
                            @endphp
                            <a href="{{ route('cursos.show', ['curso_id' => $curso->id, 'modulo_id' => $proximoModulo->id]) }}" 
                               class="btn btn-primary navigation-btn">
                                Próximo <i class="fas fa-arrow-right"></i>
                            </a>
                        @else
                            @php
                                $quiz = $curso->quizzes->first() ?? null;
                                $hasAttempted = auth()->check() && $quiz && auth()->user()->quizAttempts()->where('quiz_id', $quiz->id)->exists();
                            @endphp
                            
                            @if($quiz)
                                @if($hasAttempted)
                                    <button class="btn btn-success navigation-btn" disabled>
                                        <i class="fas fa-check"></i> Quiz Concluído
                                    </button>
                                @else
                                    <a href="{{ route('quizzes.show', ['curso_id' => $curso->id, 'quiz_id' => $quiz->id]) }}" 
                                       class="btn btn-primary navigation-btn">
                                        <i class="fas fa-play"></i> Iniciar Quiz
                                    </a>
                                @endif
                            @else
                                <button class="btn btn-secondary navigation-btn" disabled>
                                    Quiz Indisponível
                                </button>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection