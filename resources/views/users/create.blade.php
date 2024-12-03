<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Users</title>
    </head>

    <body>
        <h1>create Users</h1>

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red">{{ $error }}</p>
            @endforeach
        @endif

        <a href="{{ route('index-user') }}">Listar Usuário</a><br><br>

        <form action="{{ route('store-user') }}" method="POST">
            @csrf

            <label>Nome:</label>
            <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}"><br><br>

            <label>Email:</label>
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}"><br><br>

            <label>Senha:</label>
            <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}"><br><br>

            <button type="submit">Cadastrar</button>

        </form>
    </body>
</html>
