ADMIN
<hr>

Lista de clientes: <br>

@foreach ($clientes as $cliente)
    <p style="font-weight: bold">{{ $cliente->nome }}</p>
@endforeach