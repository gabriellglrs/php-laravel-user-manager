<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/usuarios/index.css') }}">
    <title>Gerenciamento de Usuários - Laravel</title>

</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Gerenciamento de Usuários</h1>
            <p>Gerencie todos os usuários do sistema de forma eficiente</p>
        </div>

        <!-- Statistics -->
        <div class="stats">
            <div class="stat-card">
                <div class="stat-number">{{ $totalUsuarios }}</div>
                <div class="stat-label">Total de Usuários</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $usuariosAtivos }}</div>
                <div class="stat-label">Usuários Ativos</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $usuariosInativos }}</div>
                <div class="stat-label">Usuários Inativos</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $novosUsuarios }}</div>
                <div class="stat-label">Novos Hoje</div>
            </div>
        </div>

        <!-- Controls -->
        <div class="controls">
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Buscar usuários por nome, email ou telefone..."
                    id="searchInput">
                <select class="filter-select" id="statusFilter">
                    <option value="">Todos os Status</option>
                    <option value="active">Ativo</option>
                    <option value="inactive">Inativo</option>
                    <option value="pending">Pendente</option>
                </select>
                <select class="filter-select" id="roleFilter">
                    <option value="">Todas as Funções</option>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuário</option>
                    <option value="moderator">Moderador</option>
                </select>
            </div>
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary">
                <span>+</span> Novo Usuário
            </a>
        </div>

        <!-- Users Table -->
        <div class="users-table">
            <div class="table-wrapper">
                <table id="usersTable">
                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Função</th>
                            <th>Status</th>
                            <th>Cadastrado em</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                            <tr>
                                <td>
                                    <div class="user-info">
                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face"
                                            alt="Avatar" class="user-avatar">
                                        <div class="user-details">
                                            <h4>{{ $u->name }}</h4>
                                            <p>ID: #{{ $u->id }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->phone }}</td>
                                <td>{{ $u->role }}</td>
                                <td>
                                    @if ($u->status == 1)
                                        <span class="status-badge status-active">Ativo</span>
                                    @elseif ($u->status == 0)
                                        <span class="status-badge status-inactive">Inativo</span>
                                    @endif
                                </td>
                                <td>{{ $u->created_at }}</td>
                                <td>
                                    <div class="actions">
                                        <a href="#" class="btn btn-secondary btn-sm">Editar</a>
                                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </div>

    <script>
        // Funcionalidade de busca
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const table = document.getElementById('usersTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let found = false;

                for (let j = 0; j < cells.length - 1; j++) { // -1 para não buscar na coluna de ações
                    if (cells[j].textContent.toLowerCase().includes(searchTerm)) {
                        found = true;
                        break;
                    }
                }

                rows[i].style.display = found ? '' : 'none';
            }
        });

        // Filtro por status
        document.getElementById('statusFilter').addEventListener('change', function() {
            const statusFilter = this.value;
            const table = document.getElementById('usersTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const statusCell = rows[i].getElementsByTagName('td')[4];
                const statusBadge = statusCell.querySelector('.status-badge');

                if (statusFilter === '' || statusBadge.classList.contains('status-' + statusFilter)) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        });

        // Filtro por função
        document.getElementById('roleFilter').addEventListener('change', function() {
            const roleFilter = this.value.toLowerCase();
            const table = document.getElementById('usersTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const roleCell = rows[i].getElementsByTagName('td')[3];

                if (roleFilter === '' || roleCell.textContent.toLowerCase().includes(roleFilter)) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        });

        // Animação ao carregar a página
        window.addEventListener('load', function() {
            const cards = document.querySelectorAll('.stat-card, .header, .controls, .users-table');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>

</html>
