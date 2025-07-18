<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Novo Usuário</title>
    <link rel="stylesheet" href="{{ asset('css/usuarios/create.css') }}">
</head>
<body>
<div class="container">
    <div class="form-card">
        <h2>Cadastrar Novo Usuário</h2>

        @if ($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Telefone:</label>
                    <input type="text" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" value="{{ old('password') }}">
                    @error('password')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="password_confirmation">Confirmar Senha:</label>
                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role">Função:</label>
                    <select name="role">
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
                    <select name="status">
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Ativo</option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inativo</option>
                    </select>
                    @error('status')
                    <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
