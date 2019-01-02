<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<a href="{{ route('admin-inicio') }}">ADMIN</a> > Lista de Usuários
<hr>

<p>Usuários</p>

@foreach ($usuarios as $usuario)
    <p style="font-weight: bold">{{ $usuario->nome }}</p>
@endforeach

<p><a href="{{ route('cadastro-de-usuario') }}">Cadastro</a></p>

</body>
</html>