@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="ranking-card">
        <div class="ranking-header">
            <h1><i class="fas fa-trophy"></i> Ranking Semanal</h1>
            <p class="text-muted">Top 10 desta semana ({{ \Carbon\Carbon::now()->startOfWeek()->format('d/m') }} a {{ \Carbon\Carbon::now()->endOfWeek()->format('d/m/Y') }})</p>
        </div>

        <div class="ranking-list">
            @foreach($ranking as $index => $user)
            <div class="ranking-item {{ $index < 3 ? 'top-' . ($index + 1) : '' }}">
                <div class="rank-position">
                    <span>{{ $index + 1 }}º</span>
                </div>
                <div class="user-info">
                    <span class="user-name">{{ $user->name }}</span>
                </div>
                <div class="user-xp">
                    <span>{{ number_format($user->xp_records_sum_xp_amount ?? 0, 0, ',', '.') }} XP</span>
                </div>
            </div>
            @endforeach
        </div>

        <div class="ranking-footer">
            <a href="{{ route('ranking.history') }}" class="btn btn-history">
                <i class="fas fa-history"></i> Ver Histórico
            </a>
        </div>
    </div>
</div>
@endsection