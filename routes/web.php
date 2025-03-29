<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RankingController;
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

// Rota para o formulário de login
Route::get('/login', [AuthController    ::class, 'showLoginForm'])->name('login');

// Rota para processar o login
Route::post('/login', [AuthController::class, 'login']);

// Rota para o formulário de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Rota para processar o registro
Route::post('/register', [AuthController::class, 'register']);

// Rota para logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Rotas de Quiz
Route::middleware(['auth'])->group(function () {
    Route::get('/cursos/{curso_id}/quiz/{quiz_id}', [QuizController::class, 'show'])->name('quizzes.show');
    Route::post('/cursos/{curso_id}/quiz/{quiz_id}', [QuizController::class, 'store'])->name('quizzes.store');
    Route::get('/cursos/{curso_id}/quiz/{quiz_id}/result/{score}', [QuizController::class, 'result'])->name('quizzes.result');
    
});

//Rota sobre
Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::prefix('ranking')->middleware(['auth'])->group(function () {
    Route::get('/semanal', [RankingController::class, 'weekly'])->name('ranking.weekly');
    Route::get('/historico', [RankingController::class, 'history'])->name('ranking.history');
});