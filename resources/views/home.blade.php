@extends('layouts.app')

@section('content')
<div class="simple-hero">
    <div class="container">
        <h1>Domine a educação financeira utilizada pelos especialistas</h1>
        <p class="hero-subtitle">
            Cursos, guias práticos e formações em finanças pessoais, investimentos e gestão financeira 
            para elevar seu conhecimento e conquistar sua independência financeira
        </p>
        <div class="hero-cta">
            <a href="{{ route('register') }}" class="btn btn-primary">Começar agora</a>
        </div>
    </div>
</div>

<section class="value-proposition">
    <div class="container">
        <div class="value-cards">
            <div class="value-card">
                <div class="card-icon">📊</div>
                <h3>Finanças Pessoais</h3>
                <p>Aprenda a organizar seu orçamento e sair das dívidas</p>
            </div>
            <div class="value-card">
                <div class="card-icon">💹</div>
                <h3>Investimentos</h3>
                <p>Descubra como fazer seu dinheiro trabalhar para você</p>
            </div>
            <div class="value-card">
                <div class="card-icon">🏆</div>
                <h3>Quizzes</h3>
                <p>Valide seu conhecimento com nossos Quizzes</p>
            </div>
        </div>
    </div>
</section>
@endsection