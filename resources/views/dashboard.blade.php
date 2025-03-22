@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Bem-vindo, {{ Auth::user()->name }}!</p>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-3">
                <div class="curso-titulo">
                    <h2>Meus Cursos</h2>
                </div>
                <div class="modulos-lista">
                    <ul>
                        <li><a href="#" class="ativo">Curso 1</a></li>
                        <li><a href="#">Curso 2</a></li>
                        <li><a href="#">Curso 3</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="modulo-conteudo">
                    <h1>Curso 1</h1>
                    <div class="conteudo-modulo">
                        <p>Conteúdo do curso 1.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection