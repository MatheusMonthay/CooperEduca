<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>CooperEduca - Educação Financeira</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $(function() {
        $("#cpf").mask("000.000.000-00")
        $("#telefone").mask("(00)00000-0000")
    })
    </script>
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
    <script>
    // Solução para botão voltar
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };

    // Solução para páginas em cache
    if (performance.navigation.type === 2) {
        window.location.reload(true);
    }

    // Evitar reenvio de formulário
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>