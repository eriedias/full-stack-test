ADMIN
<hr>

<p>Usuários</p>

@foreach ($usuarios as $usuario)
    <p style="font-weight: bold">{{ $usuario->nome }}</p>
@endforeach

<p><a href="{{ route('novo-usuario') }}">Adicionar</a></p>