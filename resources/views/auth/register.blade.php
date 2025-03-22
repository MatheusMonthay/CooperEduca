@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register-container">
        <h1>Registro</h1>
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Senha:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <div class="mt-3">
            <p>Já tem uma conta? <a href="{{ route('login') }}">Faça login aqui</a>.</p>
        </div>
    </div>
</div>
@endsection