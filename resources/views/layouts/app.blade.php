<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gerenciamento de Tarefas')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        @if (Auth::check())
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button class="logout" type="submit"><--- Sair desta conta</button>
            </form>        
        @endif
        <h1>App - Gerenciamento de Tarefas</h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>