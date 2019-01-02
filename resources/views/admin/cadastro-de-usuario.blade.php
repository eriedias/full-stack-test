<a href="{{ route('admin-inicio') }}">ADMIN</a> > <a href="{{ route('lista-de-usuarios') }}">Usuários</a> > Cadastro
<hr>

<p>Cadastro de usuário</p>

<form method="POST" action="">

    @csrf
    @method('PUT')

    <div>
        <label for="nome">Nome</label>
        <input id="nome" type="text" name="nome">
    </div>
    <div>
        <label for="matricula">Matrícula</label>
        <input id="matricula" type="text" name="matricula">
    </div>
    <div>
        <label for="c8de">Senha</label>
        <input id="c8de" type="password" name="c8de">
    </div>
    <div>
        <label for="c8de">
            <input type="checkbox" id="status" name="status">
            Status
        </label>
    </div>
    <input type="submit" value="Cadastrar">

</form>
