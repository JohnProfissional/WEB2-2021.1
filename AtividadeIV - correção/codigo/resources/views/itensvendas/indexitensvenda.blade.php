<h1>Página de itensvendas</h1>

@foreach ($itensvendas as $itensvenda)
<ul>
    <li>Quantidade de itens: {{$itensvenda->quantidadeitens}}</li>
    <li>Valor: {{$itensvenda->valor}}</li>
    <li>Desconto: {{$itensvenda->desconto}}</li>
    <li>ID da venda: {{$itensvenda->venda_id}}</li>
    <li>ID do produto: {{$itensvenda->produto_id}}</li>
    <li> <a href="edit/{{$itensvenda->id}}">Editar itensvenda</a></li>

    <form action="../itensvenda/{{$itensvenda->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
</ul>
@endforeach 