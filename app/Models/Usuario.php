<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Se a tabela tiver nome diferente de 'usuarios', defina assim:
    protected $table = 'users'; // ex: 'usuario' ou 'users'

    /**
     * Os atributos que podem ser preenchidos em massa.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role', // ex: 'admin', 'user', etc.
        'status', // ex: 'active', 'inactive'
        'created_at', // 'updated_at' são gerenciados automaticamente pelo Laravel
        'updated_at', // 'email_verified_at' se você estiver usando verificação de email
        'email_verified_at',
    ];

    /**
     * Os atributos que devem ser ocultos nos arrays (como em JSON).
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Os atributos que devem ser convertidos para tipos nativos.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
