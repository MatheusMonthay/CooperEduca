@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cursos Disponíveis</h1>
    <div class="cursos-grid">
        @foreach($cursos as $curso)
        <div class="curso-card">
            <h2>{{ $curso->nome }}</h2>
            <p>{{ $curso->descricao }}</p>
            <a href="{{ route('cursos.show', $curso->id) }}" class="btn">Acessar Curso</a>
        </div>
        @endforeach
    </div>
</div>
@endsection