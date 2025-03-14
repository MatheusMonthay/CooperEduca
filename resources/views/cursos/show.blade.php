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
            </div>
        </div>
    </div>
</div>
@endsection 