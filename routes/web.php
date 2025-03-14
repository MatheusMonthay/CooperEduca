<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Rota para listar todos os cursos
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');

// Rota para exibir os módulos de um curso específico
Route::get('/cursos/{curso_id}/{modulo_id?}', [CursoController::class, 'show'])->name('cursos.show');