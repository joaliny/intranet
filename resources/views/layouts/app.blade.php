<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">FAPEAM</a>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <!-- Adicione aqui o conteúdo da sua navbar -->
                    @yield('navbar')
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        @yield('content')
    </main>
</body>
</html>
