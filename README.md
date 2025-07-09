# Sistema de Gerenciamento de Usuários

Um sistema moderno e elegante para gerenciamento de usuários desenvolvido em Laravel, com interface responsiva e intuitiva.

## 📋 Sobre o Projeto

Este projeto é um sistema de gerenciamento de usuários que permite visualizar, filtrar e gerenciar usuários do sistema. Conta com uma interface moderna desenvolvida com HTML, CSS e JavaScript vanilla, integrada ao backend Laravel.

## ✨ Funcionalidades

- **Dashboard de Usuários**: Visualização completa dos usuários cadastrados
- **Estatísticas em Tempo Real**: Cards com métricas importantes (total de usuários, ativos, inativos, novos)
- **Busca Avançada**: Filtro por nome, email ou telefone
- **Filtros Dinâmicos**: Filtragem por status e função do usuário
- **Interface Responsiva**: Design que se adapta a diferentes dispositivos
- **Animações Suaves**: Transições e efeitos visuais modernos

## 🛠️ Tecnologias Utilizadas

- **Backend**: PHP 8.1+ / Laravel 11
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Banco de Dados**: MySQL/PostgreSQL/SQLite
- **Estilização**: CSS Grid, Flexbox, Gradientes
- **Arquitetura**: MVC (Model-View-Controller)

## 📁 Estrutura do Projeto

```
├── app/
│   ├── Http/Controllers/
│   │   └── UsuarioController.php     # Controller principal
│   └── Models/
│       ├── User.php                  # Model padrão do Laravel
│       └── Usuario.php               # Model customizado
├── database/
│   └── migrations/
│       └── 2025_07_09_112956_add_phone_avatar_role_status_to_users_table.php
├── public/
│   └── css/
│       └── usuarios.css              # Estilos da interface
├── resources/views/
│   └── usuarios.blade.php            # Template principal
└── routes/
    └── web.php                       # Rotas da aplicação
```

## 🚀 Instalação

### Pré-requisitos

- PHP 8.1 ou superior
- Composer
- Node.js (opcional, para assets)
- MySQL/PostgreSQL/SQLite

### Passos para Instalação

1. **Clone o repositório**
```bash
git clone https://github.com/seu-usuario/sistema-usuarios.git
cd sistema-usuarios
```

2. **Instale as dependências**
```bash
composer install
```

3. **Configure o ambiente**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure o banco de dados**
Edite o arquivo `.env` com suas credenciais:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

5. **Execute as migrações**
```bash
php artisan migrate
```

6. **Popule o banco com dados de teste (opcional)**
```bash
php artisan db:seed
```

7. **Inicie o servidor**
```bash
php artisan serve
```

8. **Acesse a aplicação**
```
http://localhost:8000/usuarios
```

## 📊 Funcionalidades Detalhadas

### Dashboard de Estatísticas
- **Total de Usuários**: Conta todos os usuários cadastrados
- **Usuários Ativos**: Filtra usuários com status ativo
- **Usuários Inativos**: Filtra usuários com status inativo
- **Novos Hoje**: Usuários cadastrados nas últimas 24 horas

### Sistema de Filtros
- **Busca em Tempo Real**: Filtra por nome, email ou telefone
- **Filtro por Status**: Ativo, Inativo ou Pendente
- **Filtro por Função**: Administrador, Usuário ou Moderador

### Interface Responsiva
- Design adaptável para desktop, tablet e mobile
- Tabela com scroll horizontal em dispositivos menores
- Cards de estatísticas em grid responsivo

## 🎨 Características do Design

- **Tema Moderno**: Gradientes e efeitos de glassmorphism
- **Paleta de Cores**: Tons de azul e roxo com contraste adequado
- **Tipografia**: Segoe UI para melhor legibilidade
- **Animações**: Transições suaves e efeitos hover
- **Acessibilidade**: Contraste adequado e navegação por teclado

## 📝 Estrutura do Banco de Dados

### Tabela `users`
```sql
- id (bigint, primary key)
- name (varchar)
- email (varchar, unique)
- email_verified_at (timestamp)
- password (varchar)
- phone (varchar, nullable)
- avatar (varchar, nullable)
- role (varchar, default: 'user')
- status (boolean, default: 1)
- remember_token (varchar)
- created_at (timestamp)
- updated_at (timestamp)
```

## 🔧 Configurações Personalizadas

### Model Usuario
O projeto utiliza um model customizado `Usuario` que aponta para a tabela `users`, permitindo maior flexibilidade na manipulação dos dados.

### Controller UsuarioController
Centraliza a lógica de negócio para:
- Listagem de usuários
- Cálculo de estatísticas
- Filtragem de dados

## 📱 Responsividade

O sistema foi desenvolvido com abordagem mobile-first:
- **Desktop**: Layout completo com todas as funcionalidades
- **Tablet**: Adaptação dos elementos para telas médias
- **Mobile**: Interface otimizada para dispositivos móveis

## 🚧 Funcionalidades Futuras

- [ ] Sistema de autenticação
- [ ] CRUD completo de usuários
- [ ] Upload de avatar
- [ ] Exportação de dados
- [ ] Notificações em tempo real
- [ ] Sistema de permissões
- [ ] API REST
- [ ] Testes automatizados

## 🤝 Contribuindo

1. Faça o fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 📧 Contato

Seu Nome - [seu.email@example.com](mailto:seu.email@example.com)

Link do Projeto: [https://github.com/seu-usuario/sistema-usuarios](https://github.com/seu-usuario/sistema-usuarios)

## 🙏 Agradecimentos

- Laravel Framework
- Comunidade PHP
- Unsplash pelas imagens de avatar
- Contribuidores do projeto

---

**Desenvolvido com ❤️ usando Laravel**
