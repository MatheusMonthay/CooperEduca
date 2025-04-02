@extends('layouts.app')

@section('content')
<div class="container dashboard-container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Cabeçalho com título centralizado e saudação à direita -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5">
                <div class="text-center text-md-start mb-3 mb-md-0">
                    <h1 class="mb-0">Meu Aprendizado</h1>
                </div>
                <div class="text-center text-md-end">
                    <p class="lead text-muted mb-0">Bem-vindo, {{ Auth::user()->name }}</p>
                </div>
            </div>

            <!-- Botões de navegação -->
            <div class="d-flex justify-content-center mb-5">
                <div class="btn-group" role="group">
                    <a href="{{ route('dashboard', ['tab' => 'progress']) }}"
                        class="btn btn-outline-primary {{ $tab === 'progress' ? 'active' : '' }}">
                        <i class="fas fa-spinner me-2"></i>Em Andamento
                        @if($inProgress->count() > 0)
                        <span class="badge bg-primary ms-2">{{ $inProgress->count() }}</span>
                        @endif
                    </a>
                    <a href="{{ route('dashboard', ['tab' => 'completed']) }}"
                        class="btn btn-outline-success {{ $tab === 'completed' ? 'active' : '' }}">
                        <i class="fas fa-check-circle me-2"></i>Concluídos
                        @if($completed->count() > 0)
                        <span class="badge bg-success ms-2">{{ $completed->count() }}</span>
                        @endif
                    </a>
                </div>
            </div>

            <!-- Conteúdo principal -->
            <div class="dashboard-content">
                @if($tab === 'progress')
                <!-- Cursos em andamento -->
                <div class="row g-4">
                    @if($inProgress->count() > 0)
                    @foreach($inProgress as $course)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 curso-card shadow-sm border-0 p-3">
                            <!-- ... (conteúdo do card em andamento) ... -->
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12">
                        <div class="empty-state text-center p-5">
                            <div class="empty-state-icon bg-light-primary mb-4">
                                <i class="fas fa-book-open fa-3x text-primary"></i>
                            </div>
                            <h2 class="mb-3">Nenhum curso em andamento</h2>
                            <p class="text-muted mb-4">Você ainda não começou nenhum curso.</p>
                            <div class="mt-3">
                                <a href="{{ route('cursos.index') }}" class="btn btn-primary px-4">
                                    <i class="fas fa-search me-2"></i> Explorar Cursos
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @else
                <!-- Cursos concluídos -->
                <div class="row g-4">
                    @if($completed->count() > 0)
                    @foreach($completed as $course)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 curso-card shadow-sm border-0 p-3">
                            <div class="card-img-top bg-light-success mb-3" style="height: 120px; background-color: #e8f5e9;">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <i class="fas fa-trophy fa-3x text-success"></i>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <h5 class="card-title mb-3">{{ $course->nome }}</h5>
                                <p class="text-success mb-3">
                                    <i class="fas fa-check-circle me-2"></i> Curso concluído
                                </p>
                                <p class="small text-muted mb-4">
                                    <i class="fas fa-list-ul me-2"></i>
                                    {{ $course->modulos->count() }} módulos completados
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0 px-0 pb-0 pt-3">
                                <div class="d-grid gap-2">
                                    <a href="{{ route('cursos.show', $course->id) }}" class="btn btn-outline-success">
                                        Revisar Curso
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12">
                        <div class="empty-state text-center p-5">
                            <div class="empty-state-icon bg-light-success mb-4">
                                <i class="fas fa-trophy fa-3x text-success"></i>
                            </div>
                            <h3 class="mb-3">Nenhum curso concluído</h3>
                            <p class="text-muted mb-0">Complete seus cursos para vê-los aqui.</p>
                        </div>
                    </div>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection