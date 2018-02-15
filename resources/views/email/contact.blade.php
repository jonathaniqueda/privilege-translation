<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Solicitação de contato - {{ env('APP_NAME') }}</title>
</head>
<body>
<div>
    <p>Olá Comercial Privilège Translations,</p>
    <p>O {{ $data['name'] }} enviou uma mensagem de contato.</p>
    <p><strong>E-mail:</strong> {{ $data['email'] }}</p>
    <p><strong>Telefone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Serviço solicitado:</strong> {{ $data['service'] }}</p>
    <p><strong>Mensagem:</strong> {{ $data['msg'] }}</p>
    <p>Att, Site Privilège Translations.</p>
</div>
</body>
</html>