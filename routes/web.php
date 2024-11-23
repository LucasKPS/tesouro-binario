<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Rota de exibição da página de login
Route::get('/', function () { return view('pages.login');})->name('login');

Route::post('/login', [LoginController::class, 'auth'])->name('login.process');

Route::get('/register', function () { return view('pages.register'); })->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.process');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{$page}', [DashboardController::class, 'loadPage'])->name('dashboard');
});


Route::get('/instrutor/alunos', [AlunoController::class, 'index'])->name('instrutor.lista-alunos');
Route::get('/instrutor/alunos/{id}/editar', [AlunoController::class, 'edit'])->name('instrutor.editar-aluno');
Route::put('/instrutor/alunos/{id}', [AlunoController::class, 'update'])->name('instrutor.atualizar-aluno');

