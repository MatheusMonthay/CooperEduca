@extends('layouts.email')

@section('content')
    <h1>Parabéns, {{ $user->name }}!</h1>
    
    <p>Você ficou na <strong>{{ $position }}ª posição</strong> no ranking semanal!</p>
    
    @if($position <= 3)
        <p>Como premiado desta semana, você receberá um brinde especial!</p>
        
        <p><strong>Próximos passos:</strong></p>
        <ul>
            <li>Nossa equipe entrará em contato com você por e-mail nos próximos dias</li>
            <li>Vamos combinar os detalhes para envio do seu brinde</li>
            <li>Fique atento à sua caixa de entrada e ao spam</li>
        </ul>
    @endif
    
    <p>Agradecemos por participar e continue acumulando XP para subir ainda mais no ranking!</p>
    
    <p>Equipe {{ config('app.name') }}</p>
@endsection