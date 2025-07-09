<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $users = Usuario::all(); // busca todos os produtos do banco

        $totalUsuarios = Usuario::all()->count(); // conta o total de produtos cadastrados no banco

        $novosUsuarios = Usuario::where('created_at', '>=', now()->subDays(1))->count(); // conta o total de produtos criados nos últimos 30 dias

        $usuariosAtivos = Usuario::where('status', 1)->count(); // conta o total de produtos ativos

        $usuariosInativos = Usuario::where('status', 0)->count(); // conta o total de produtos inativos

        return view('usuarios', compact('users', 'totalUsuarios', 'usuariosAtivos', 'usuariosInativos', 'novosUsuarios')); // retorna a view 'usuarios' com os dados dos usuários
    }
}
