@extends('layouts.app')

@section('title', 'Criar Usuário')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/usuarios/create.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="header">
            <h1>Cadastrar Novo Usuário</h1>
            <p>Preencha os dados abaixo para criar um novo usuário</p>
        </div>

        <div class="controls">
            @if ($errors->any())
                <div class="alert-error">
                    <ul>
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('usuarios.store') }}" method="POST" class="search-container">
                @csrf

                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="search-input">
                        @error('name')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="search-input">
                        @error('email')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Telefone:</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="search-input">
                        @error('phone')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password" class="search-input">
                        @error('password')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password_confirmation">Confirmar Senha:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="search-input">
                        @error('password_confirmation')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="role">Função:</label>
                        <select name="role" id="role" class="filter-select">
                            <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Usuário</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Administrador</option>
                            <option value="moderator" {{ old('role') == 'moderator' ? 'selected' : '' }}>Moderador</option>
                        </select>
                        @error('role')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status" id="status" class="filter-select">
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Ativo</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inativo</option>
                        </select>
                        @error('status')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="actions">
                    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
