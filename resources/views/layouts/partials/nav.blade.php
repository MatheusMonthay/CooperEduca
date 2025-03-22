<ul class="nav-links">
            <li><a href="{{ route('home') }}">Início</a></li>
            <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
            <li><a href="#sobre">Sobre</a></li>
        </ul>
        <div class="nav-buttons">
            @auth
                <a href="{{ route('dashboard') }}" class="btn">Dashboard</a>                 
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn">Entrar</a>
                <a href="{{ route('register') }}" class="btn btn-outline">Criar Conta</a>
            @endauth
        </div>