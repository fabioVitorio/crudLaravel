<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show Users</title>
    </head>

    <body>
        <h1>Show Users</h1>

        <a href="{{ route('index-user')}}">Listar Usuário</a> <br>
        <a href="{{ route('edit-user', ['user' => $user->id]) }}">Editar</a><br><br>

        @if (session('success'))
            <p style="color: green">{{ session('success') }}</p>
        @endif


        ID: {{ $user->id }} <br>
        Nome: {{ $user->name }} <br>
        Email: {{ $user->email }} <br>
        Cadastrado: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y - H:i:s') }} <br>
        Atualizado: {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y - H:i:s') }} <br>


    </body>
</html>
