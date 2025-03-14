<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Modulo;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Exibe a lista de cursos
       public function index() {
           $cursos = Curso::all();
           return view('cursos.index', compact('cursos'));
       }
    // Exibe os módulos de um curso específico
    public function show($curso_id, $modulo_id = null) {
        $curso = Curso::findOrFail($curso_id);
        $modulos = $curso->modulos()->orderBy('ordem', 'asc')->get();
        // Se um módulo específico for selecionado, busca seu conteúdo
        $moduloAtual = $modulo_id ? Modulo::findOrFail($modulo_id) : $modulos->first();

        return view('cursos.show', compact('curso', 'modulos', 'moduloAtual'));
    }
}
