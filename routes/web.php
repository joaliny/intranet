<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColaboradorController;

// Página inicial
Route::get('/', function () {
    return view('home');
});

// Página de ramais
Route::get('/ramais', function () {
    return view('ramais');
});

// Grupo de rotas para a área admin
Route::prefix('admin')->group(function () {
    // Dashboard do admin
    Route::get('/', function () {
        return view('admin.admin');
    })->name('admin.dashboard');

    // Colaboradores
    Route::get('/colaboradores', [ColaboradorController::class, 'index'])->name('admin.colaboradores.index');
    Route::get('/colaboradores/create', [ColaboradorController::class, 'create'])->name('admin.colaboradores.create');
    Route::post('/colaboradores', [ColaboradorController::class, 'store'])->name('admin.colaboradores.store');

    // Página de verificação via formulário
    Route::get('/colaboradores/verificar-cpf', [ColaboradorController::class, 'verificarCpfForm'])->name('admin.colaboradores.verificarCpfForm');
    Route::post('/colaboradores/verificar-cpf', [ColaboradorController::class, 'verificarCpf'])->name('admin.colaboradores.verificarCpf');

    // Verificação via AJAX (fetch)
    Route::post('/admin/colaboradores/verificar-cpf-ajax', [ColaboradorController::class, 'processarVerificacaoCpf'])->name('admin.colaboradores.processarVerificacaoCpf');
});
