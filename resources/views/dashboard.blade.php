@extends('layouts.app')

@section('content')
<div class="container dashboard-container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h1 class="mb-4">Meu Aprendizado</h1>
            
            <!-- Abas de Navegação -->
            <ul class="nav nav-tabs mb-4" id="dashboardTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="progress-tab" data-bs-toggle="tab" 
                            data-bs-target="#progress" type="button" role="tab">
                        <i class="fas fa-spinner me-2"></i>Em Andamento
                        @if($inProgress->count() > 0)
                        <span class="badge bg-primary ms-2">{{ $inProgress->count() }}</span>
                        @endif
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="completed-tab" data-bs-toggle="tab" 
                            data-bs-target="#completed" type="button" role="tab">
                        <i class="fas fa-check-circle me-2"></i>Concluídos
                        @if($completed->count() > 0)
                        <span class="badge bg-success ms-2">{{ $completed->count() }}</span>
                        @endif
                    </button>
                </li>
            </ul>
            
            <!-- Conteúdo das Abas -->
            <div class="tab-content">
                <!-- Aba Em Andamento -->
                <div class="tab-pane fade show active" id="progress" role="tabpanel">
                    @if($inProgress->count() > 0)
                        <div class="row">
                            @foreach($inProgress as $course)
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="card h-100 curso-card shadow-sm border-0">
                                        <div class="card-img-top bg-light" style="height: 120px; background-color: #e9f5eb;">
                                            <!-- Imagem do curso ou ícone -->
                                            <div class="d-flex justify-content-center align-items-center h-100">
                                                <i class="fas fa-book-open fa-3x text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $course['curso']->nome }}</h5>
                                            
                                            <!-- Progresso -->
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="progress flex-grow-1 me-2" style="height: 8px;">
                                                    <div class="progress-bar bg-success" 
                                                         role="progressbar" 
                                                         style="width: {{ $course['progress'] }}%">
                                                    </div>
                                                </div>
                                                <small class="text-muted">{{ $course['progress'] }}%</small>
                                            </div>
                                            
                                            <!-- Próximo módulo -->
                                            @if($course['next_module'])
                                                <p class="small text-muted mb-2">
                                                    <i class="fas fa-arrow-right me-1"></i>
                                                    Próximo: {{ $course['next_module']->titulo }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="card-footer bg-white border-0">
                                            <a href="{{ $course['next_module'] ? route('cursos.show', ['curso_id' => $course['curso']->id, 'modulo_id' => $course['next_module']->id]) : route('cursos.show', $course['curso']->id) }}" 
                                               class="btn btn-primary w-100">
                                                Continuar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="empty-state text-center py-5">
                            <div class="empty-state-icon bg-light-primary">
                                <i class="fas fa-book-open fa-3x text-primary"></i>
                            </div>
                            <h3 class="mt-3">Nenhum curso em andamento</h3>
                            <p class="text-muted">Você ainda não começou nenhum curso.</p>
                            <a href="{{ route('cursos.index') }}" class="btn btn-primary mt-3">
                                <i class="fas fa-search me-1"></i> Explorar Cursos
                            </a>
                        </div>
                    @endif
                </div>
                
                <!-- Aba Concluídos -->
                <div class="tab-pane fade" id="completed" role="tabpanel">
                    @if($completed->count() > 0)
                        <div class="row">
                            @foreach($completed as $course)
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="card h-100 curso-card shadow-sm border-0">
                                        <div class="card-img-top bg-light-success" style="height: 120px; background-color: #e8f5e9;">
                                            <div class="d-flex justify-content-center align-items-center h-100">
                                                <i class="fas fa-trophy fa-3x text-success"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $course->nome }}</h5>
                                            <p class="text-success mb-3">
                                                <i class="fas fa-check-circle me-1"></i> Curso concluído
                                            </p>
                                            <p class="small text-muted">
                                                <i class="fas fa-list-ul me-1"></i>
                                                {{ $course->modulos->count() }} módulos completados
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white border-0">
                                            <div class="d-grid gap-2">
                                                <a href="{{ route('cursos.show', $course->id) }}" class="btn btn-outline-success">
                                                    Revisar Curso
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="empty-state text-center py-5">
                            <div class="empty-state-icon bg-light-success">
                                <i class="fas fa-trophy fa-3x text-success"></i>
                            </div>
                            <h3 class="mt-3">Nenhum curso concluído</h3>
                            <p class="text-muted">Complete seus cursos para vê-los aqui.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection