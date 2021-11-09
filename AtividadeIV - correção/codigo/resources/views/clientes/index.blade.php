<h1>Página de clientes</h1>


@foreach ($clientes as $cliente)
<ul>
    <li>Nome do cliente: {{$cliente->nome}}</li>
    <li>Endereco do cliente: {{$cliente->endereco}}</li>
    <li>debito do cliente: {{$cliente->debito}}</li>
    <li> <a href="edit/{{$cliente->id}}">Editar cliente</a></li>

    <form action="../clientes/{{$cliente->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>

</ul>
@endforeach 
