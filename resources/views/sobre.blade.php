@extends('layouts.app')

@section('content')
<section class="about-hero">
    <div class="container">
        <h1>Sobre a CooperEduca</h1>
        <p class="subtitle">Democratizando a educação financeira no Brasil</p>
    </div>
</section>

<section class="about-mission">
    <div class="container">
        <div class="mission-content">
            <h2>Nossa Missão</h2>
            <p>A CooperEduca nasceu da identificação de um problema comum: muitas pessoas têm vontade de aprender a administrar melhor seu dinheiro, sair das dívidas e começar a investir, mas encontram dificuldades para acessar conteúdos de qualidade em uma linguagem acessível.</p>
            
            <p>Nossa missão é simplificar a educação financeira, tornando-a acessível, prática e relevante para o dia a dia de todos os brasileiros, independentemente de sua renda ou nível de conhecimento prévio.</p>
        </div>
    </div>
</section>

<section class="about-values">
    <div class="container">
        <h2>Nossos Valores</h2>
        <div class="values-grid">
            <div class="value-card">
                <h3>Transparência</h3>
                <p>Acreditamos em fornecer informações claras e honestas, sem promessas milagrosas ou enganosas.</p>
            </div>
            
            <div class="value-card">
                <h3>Acessibilidade</h3>
                <p>Buscamos falar a linguagem do nosso público, tornando conceitos complexos em algo fácil de entender.</p>
            </div>
            
            <div class="value-card">
                <h3>Comunidade</h3>
                <p>Fomentamos o aprendizado coletivo, onde todos podem compartilhar experiências e crescer juntos.</p>
            </div>
            
            <div class="value-card">
                <h3>Praticidade</h3>
                <p>Nosso foco está em ensinar ações concretas que podem ser aplicadas imediatamente no cotidiano.</p>
            </div>
        </div>
    </div>
</section>

<section class="about-join">
    <div class="container">
        <div class="join-content">
            <h2>Junte-se a Nossa Comunidade</h2>
            <p>Se você compartilha da nossa visão de uma educação financeira acessível a todos, venha fazer parte dessa jornada conosco.</p>
            
            <div class="join-cta">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Acessar Cursos</a>
                @else
                    <a href="{{ route('register') }}" class="btn btn-outline">Criar Conta Gratuita</a>
                    <a href="{{ route('login') }}" class="btn btn-outline">Já sou membro</a>
                @endauth
            </div>
        </div>
    </div>
</section>
@endsection