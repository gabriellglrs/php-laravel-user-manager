<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index'); // Rota para exibir a lista de usuários
Route::get('/usuarios/criar', [UsuarioController::class, 'create'])->name('usuarios.create'); // Rota para exibir o formulário de criação de usuário
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store'); // Rota para armazenar um novo usuário
