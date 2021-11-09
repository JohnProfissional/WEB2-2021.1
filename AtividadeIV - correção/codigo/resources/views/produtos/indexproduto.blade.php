<h1>Página de produtos</h1>


@foreach ($produtos as $produto)
<ul>
    <li>Nome do produto: {{$produto->nomeproduto}}</li>
    <li>Quantidade: {{$produto->quantidade}}</li>
    <li>Data de vencimento: {{$produto->datavencimento}}</li>
    <li> <a href="edit/{{$produto->id}}">Editar produto</a></li>

    <form action="../produtos/{{$produto->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
</ul>
@endforeach 