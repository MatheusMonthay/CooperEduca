<!DOCTYPE html>
<html>

<head>
    <title>Seu Resultado Semanal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #2d3748;
        }

        ul {
            padding-left: 20px;
        }

        .button {
            display: inline-block;
            background: #3490dc;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <h1>Parabéns, {{ $user->name }}!</h1>

    <p>Você ficou na <strong>{{ $position }}ª posição</strong> no ranking semanal do {{ config('app.name') }}!</p>

    @if($position <= 3)
        <p>🎉 Como premiado desta semana, você receberá um brinde especial!</p>

        <p><strong>Próximos passos:</strong></p>
        <ul>
            <li>Vamos combinar os detalhes para envio do seu brinde</li>
            <li>Nos envie seu enderço para agilizarmos o envio do seu brinde :)</li>
            <li>Fique atento à sua caixa de entrada (incluindo a pasta de spam)</li>
        </ul>
        @endif

        <p>Continue participando para subir ainda mais no ranking na próxima semana!</p>

        <p>Atenciosamente,<br>Equipe {{ config('app.name') }}</p>

</body>

</html>