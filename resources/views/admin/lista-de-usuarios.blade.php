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
    <p>
        <span style="font-weight: bold">{{ $usuario->nome }}</span>
    </p>

    <form style="display: inline" method="POST" action="{{ route('excluir-usuario', [ 'id' => $usuario->id ]) }}">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $usuario->id }}">
        <button type="submit">Deletar</button>
    </form>

    <a href="{{ route('edicao-de-usuario', [ 'id' => $usuario->id ]) }}">Editar</a>

    <hr>
@endforeach


<p><a href="{{ route('cadastro-de-usuario') }}">Cadastro</a></p>

</body>
</html>