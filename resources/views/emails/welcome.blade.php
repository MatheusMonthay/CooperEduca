<!DOCTYPE html>
<html>

<head>
    <title>Bem-vindo</title>
</head>

<body>
    <h1>Olá, {{ $user->name }}!</h1>

    <p>Seja muito bem-vindo ao {{ config('app.name') }}.</p>

    <p>Estamos felizes por você ter se juntado a nós. Aqui estão alguns detalhes da sua conta:</p>

    <ul>
        <li><strong>E-mail:</strong> {{ $user->email }}</li>
        <li><strong>Data de registro:</strong> {{ $user->created_at->format('d/m/Y') }}</li>
    </ul>

    <p>
        <a href="{{ route('login') }}"
            style="background: #3490dc; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">
            Acesse sua conta agora
        </a>
    </p>

    <p>Se tiver alguma dúvida, não hesite em nos contatar.</p>

    <p>Atenciosamente,<br>Equipe {{ config('app.name') }}</p>
</body>

</html>