<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index() // Exibe a lista de usuários
    {
        $users = Usuario::all(); // busca todos os produtos do banco

        $totalUsuarios = Usuario::all()->count(); // conta o total de produtos cadastrados no banco

        $novosUsuarios = Usuario::where('created_at', '>=', now()->subDays(1))->count(); // conta o total de produtos criados nos últimos 30 dias

        $usuariosAtivos = Usuario::where('status', 1)->count(); // conta o total de produtos ativos

        $usuariosInativos = Usuario::where('status', 0)->count(); // conta o total de produtos inativos

        return view('usuarios.index', compact('users', 'totalUsuarios', 'usuariosAtivos', 'usuariosInativos', 'novosUsuarios')); // retorna a view 'usuarios' com os dados dos usuários
    }

    public function create() // Exibe o formulário para criar um novo usuário
    {
        return view('usuarios.create'); // retorna a view 'usuarios.create' para o formulário de criação de usuário
    }

    public function store(Request $request) // Armazena um novo usuário
    {
        // Validação
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'nullable|string',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string',
            'status' => 'required|boolean',
        ]);

        // Criação do usuário
        Usuario::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
