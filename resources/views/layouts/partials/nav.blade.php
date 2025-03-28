<ul class="nav-links">
    <li><a href="{{ route('home') }}">Início</a></li>
    <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
    @auth
    <li><a href="{{ route('ranking.weekly') }}">Ranking</a></li>
    @endauth
    <li><a href="{{ route('sobre') }}">Sobre</a></li>
</ul>
<div class="nav-buttons">
    @auth
    <a href="{{ route('dashboard') }}" class="btn btn-dashboard">Dashboard</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline">Logout</button>
    </form>
    @else
    <a href="{{ route('login') }}" class="btn ">Entrar</a>
    <a href="{{ route('register') }}" class="btn btn-outline">Criar Conta</a>
    @endauth
</div>