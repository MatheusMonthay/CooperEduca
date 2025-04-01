@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Conteúdo normal da dashboard -->

                    <!-- Seção de teste (pode ser somente para admin) -->
                    <!-- Ou outra permissão que você preferir -->
                    <div class="mt-4 p-3 bg-light rounded">
                        <h5>Testar E-mail de Ranking</h5>
                        <p>Clique no botão abaixo para testar o envio do e-mail de ranking:</p>
                        
                        <form action="{{ route('test.ranking.email') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="position" class="form-label">Posição para teste:</label>
                                <select name="position" id="position" class="form-select">
                                    <option value="1">1º Lugar</option>
                                    <option value="2">2º Lugar</option>
                                    <option value="3">3º Lugar</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Enviar E-mail de Teste
                            </button>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection