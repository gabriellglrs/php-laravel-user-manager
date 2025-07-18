<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>
<header class="header">
    <h1>Sistema de Gerenciamento</h1>
</header>

<main class="container">
    @yield('content')
</main>

<footer class="footer">
    <small>© {{ date('Y') }} - Todos os direitos reservados</small>
</footer>

@stack('scripts')
</body>
</html>
