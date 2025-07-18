<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index');

// Rota para exibir a lista de usuários
Route::get('/usuarios/criar', [UsuarioController::class, 'create'])->name('usuarios.create');

// Rota para armazenar um novo usuário
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

// Rota para exibir o formulário de edição
Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');

// Rota para atualizar os dados do usuário
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');

// Rota para excluir o usuário
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
