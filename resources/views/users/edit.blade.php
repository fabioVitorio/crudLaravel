<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Users</title>
    </head>

    <body>
        <h1>Edit Users</h1>

        <a href="{{ route('index-user')}}">Listar Usuário</a> <br>
        <a href="{{ route('show-user', ['user' => $user->id]) }}">Visualizar</a><br><br>

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red">{{ $error }}</p>
            @endforeach
        @endif

        <form action="{{ route('update-user', ['user' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nome:</label>
            <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name', $user->name) }}"><br><br>

            <label>Email:</label>
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email', $user->email) }}"><br><br>

            <label>Senha:</label>
            <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}"><br><br>

            <button type="submit">Salvar</button>

        </form>

    </body>
</html>
