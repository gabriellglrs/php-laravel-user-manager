<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial 
Route::get('/usuarios', [UsuarioController::class, 'index']); // Rota para listar usuários
