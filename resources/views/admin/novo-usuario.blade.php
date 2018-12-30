<a href="{{ route('admin-inicio') }}">ADMIN</a> > Novo Usuário
<hr>

<p>Novo usuário</p>

<form method="POST" action="{{ route('admin-inicio') }}">
    @csrf
    @method('PUT')

</form>
