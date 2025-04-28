<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColaboradorController;

// Rota para a página inicial
Route::get('/', function () {
    return view('home'); // Escolha apenas uma view para '/'
});

// Rota para a página de ramais
Route::get('/ramais', function () {
    return view('ramais');
});

Route::prefix('admin')->group(function () {
    // Página principal do admin
    Route::get('/', function () {
        return view('admin.admin'); // View que extende o layout
    })->name('admin.dashboard');
});
    // Rotas de colaboradores
   
Route::prefix('admin')->group(function () {
    Route::get('/colaboradores', [ColaboradorController::class, 'index'])
        ->name('admin.colaboradores.index');
});


Route::prefix('admin')->group(function () {
    Route::get('/colaboradores', [ColaboradorController::class, 'index'])->name('admin.colaboradores.index');
    Route::get('/colaboradores/create', [ColaboradorController::class, 'create'])->name('admin.colaboradores.create');
    Route::post('/colaboradores', [ColaboradorController::class, 'store'])->name('admin.colaboradores.store');
});

