<h1>Página de endereços</h1>


@foreach ($enderecos as $endereco)
<ul>
    <li>Logradouro: {{$endereco->logradouro}}</li>
    <li>Bairro: {{$endereco->bairro}}</li>
    <li>Cidade: {{$endereco->cidade}}</li>
    <li>UF: {{$endereco->uf}}</li>
    <li>ID cliente: {{$endereco->cliente_id}}</li>
    <li> <a href="edit/{{$endereco->id}}">Editar endereco</a></li>

    <form action="../endereco/{{$endereco->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>

</ul>
@endforeach 
