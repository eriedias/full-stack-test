<a href="{{ route('admin-inicio') }}">ADMIN</a> > <a href="{{ route('lista-de-usuarios') }}">Usuários</a> > Editar
<hr>

<p>Edição de usuário: <span style="font-weight: bold">{{ $usuario->nome }}</span></p>

<form method="POST" action="">

    @csrf
    @method('PUT')

    <div>
        <label for="nome">Nome</label>
        <input id="nome" type="text" name="nome" value="{{ $usuario->nome }}">
    </div>
    <div>
        <label for="matricula">Matrícula</label>
        <input id="matricula" type="text" name="matricula" value="{{ $usuario->matricula }}">
    </div>
    <div>
        <label for="c8de">
            <input type="checkbox" id="status" name="status" @php if ($usuario->status == 1) { echo 'checked'; } @endphp >
            Status
        </label>
    </div>
    <input type="hidden" name="id" value="{{ $usuario->id }}">
    <input type="submit" value="Salvar">

</form>
