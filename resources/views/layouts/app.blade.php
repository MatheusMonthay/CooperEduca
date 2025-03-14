<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CooperEduca - Educação Financeira</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Inclui o cabeçalho -->
    @include('layouts.partials.header')

    <!-- Conteúdo principal -->
    <main>
        @yield('content')
    </main>

    <!-- Inclui o rodapé -->
    @include('layouts.partials.footer')
</body>
</html>