<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Modulo;
use App\Models\UserCourseProgress;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Exibe a lista de cursos
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }
    // Exibe os módulos de um curso específico
    public function show($curso_id, $modulo_id = null)
    {
        $curso = Curso::with(['modulos' => function ($query) {
            $query->orderBy('ordem', 'asc');
        }])->findOrFail($curso_id);

        $modulos = $curso->modulos;
        $moduloAtual = $modulo_id ? Modulo::findOrFail($modulo_id) : $modulos->first();

        // Registrar visualização do módulo
        if (auth()->check() && $moduloAtual) {
            UserCourseProgress::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                    'curso_id' => $curso_id,
                    'modulo_id' => $moduloAtual->id
                ],
                ['completed' => true, 'completed_at' => now()]
            );
        }

        return view('cursos.show', compact('curso', 'modulos', 'moduloAtual'));
    }
}
