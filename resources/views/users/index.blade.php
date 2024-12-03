<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index Users</title>
    </head>

    <body>
        <h1>index Users</h1>

        @if (session('success'))
            <p style="color: green">{{ session('success') }}</p>
        @endif

        <a href="{{ route('create-user')}}">Cadastrar Usuário</a> <br><br>

        @forelse ($users as $user)
            ID: {{ $user->id }} <br>
            Nome: {{ $user->name }} <br>
            Email: {{ $user->email }} <br>
            <a href="{{ route('show-user', ['user' => $user->id]) }}">Visualizar</a><br>
            <a href="{{ route('edit-user', ['user' => $user->id]) }}">Editar</a><br>
            <a href="{{ route('destroy-user', ['user' => $user->id]) }}">Excluir</a><br>
            <hr>
        @empty
            
        @endforelse

    </body>
</html>
