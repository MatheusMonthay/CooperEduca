<?php

use App\Http\Controllers\AuthController;
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

// Rota protegida (exemplo)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');