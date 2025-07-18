@extends('layouts.app')

@section('title', 'Editar Usuário')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/usuarios/edit.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="header">
            <h1>Editar Usuário</h1>
            <p>Atualize as informações do usuário abaixo</p>
        </div>

        <div class="controls">
            <form action="{{ route('usuarios.update', $user->id) }}" method="POST" class="search-container">
                @csrf
                @method('PUT')

                <div class="search-container" style="flex-direction: column; max-width: none;">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="search-input" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" class="search-input" required>

                    <label for="phone">Telefone:</label>
                    <input type="text" name="phone" id="phone" value="{{ $user->phone }}" class="search-input">

                    <label for="role">Função:</label>
                    <select name="role" id="role" class="filter-select">
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>Usuário</option>
                        <option value="moderator" {{ $user->role == 'moderator' ? 'selected' : '' }}>Moderador</option>
                    </select>

                    <label for="status">Status:</label>
                    <select name="status" id="status" class="filter-select">
                        <option value="1" {{ $user->status ? 'selected' : '' }}>Ativo</option>
                        <option value="0" {{ !$user->status ? 'selected' : '' }}>Inativo</option>
                    </select>

                    <div class="actions">
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
