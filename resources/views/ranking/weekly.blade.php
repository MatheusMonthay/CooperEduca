@extends('layouts.app')

@section('content')
<div class="container">
    <div class="ranking-container">
        <h1>Ranking Semanal</h1>
        <p>Top 10 usuários com mais XP esta semana</p>
        
        <div class="ranking-list">
            @foreach($ranking as $index => $user)
                <div class="ranking-item">
                    <span class="position">{{ $index + 1 }}º</span>
                    <span class="user-name">{{ $user->name }}</span>
                    <span class="user-xp">{{ $user->xp_records_sum_xp_amount }} XP</span>
                </div>
            @endforeach
        </div>
        
        <a href="{{ url()->previous() }}" class="btn btn-primary">
            Voltar
        </a>
    </div>
</div>
@endsection