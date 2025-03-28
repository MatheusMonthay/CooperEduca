@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="history-card">
        <div class="history-header">
            <h1><i class="fas fa-archive"></i> Histórico de Rankings</h1>
            <p class="text-muted">Top 3 das semanas anteriores</p>
        </div>

        <div class="history-list">
            @foreach($history as $record)
            <div class="week-record">
                <div class="week-header">
                    <h2>Semana de {{ $record->week_start_date->format('d/m/Y') }}</h2>
                </div>
                
                <div class="top3-list">
                    @foreach(json_decode($record->top3_users, true) as $index => $user)
                    <div class="top3-item top-{{ $index + 1 }}">
                        <div class="rank-position">
                            <span>{{ $index + 1 }}º</span>
                        </div>
                        <div class="user-info">
                            <img src="{{ $user['avatar'] ?? asset('images/default-avatar.png') }}" alt="{{ $user['name'] }}" class="user-avatar">
                            <span class="user-name">{{ $user['name'] }}</span>
                        </div>
                        <div class="user-xp">
                            <span>{{ number_format($user['xp'], 0, ',', '.') }} XP</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <div class="history-pagination">
            {{ $history->links() }}
        </div>

        <div class="history-footer">
            <a href="{{ route('ranking.weekly') }}" class="btn btn-back">
                <i class="fas fa-arrow-left"></i> Voltar para Ranking Atual
            </a>
        </div>
    </div>
</div>
@endsection