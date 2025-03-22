@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-container">
        <h1>Login</h1>
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <div class="mt-3">
            <p>Não tem uma conta? <a href="{{ route('register') }}">Crie uma aqui</a>.</p>
        </div>
    </div>
</div>
@endsection