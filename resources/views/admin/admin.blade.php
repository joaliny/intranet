<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administração')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <style>
        body { display: flex; margin: 0; font-family: Arial, sans-serif; }
        .sidebar { width: 250px; background-color: #2c3e50; color: white; height: 100vh; padding: 20px; box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); }
        .sidebar h2 { text-align: center; margin-bottom: 20px; }
        .sidebar ul { list-style: none; padding: 0; }
        .sidebar ul li { margin: 15px 0; }
        .sidebar ul li a { text-decoration: none; color: white; padding: 10px; display: block; border-radius: 5px; transition: background-color 0.3s; }
        .sidebar ul li a:hover { background-color: #34495e; }
        .content { flex: 1; padding: 20px; }
    </style>
</head>
<body>
    <div class="sidebar">
    <h2>FAPEAM</h2>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">home</a></li>
            <li><a href="{{ route('admin.colaboradores.index') }}">Usuários</a></li>
            <li><a href="#">Slides Bannes</a></li>
            <li><a href="#">Enquetes</a></li>
            <li><a href="#">Posts mural</a></li>
            <li><a href="#">Departamento</a></li>
            <li><a href="#">Ramais telefônicos</a></li>
            <li><a href="#">Bem Vindos</a></li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
