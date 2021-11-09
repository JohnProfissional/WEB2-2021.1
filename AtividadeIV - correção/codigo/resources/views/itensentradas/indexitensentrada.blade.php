<h1>Página de itensentradas</h1>

@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Preco de compra: {{$itensentrada->precocompra}}</li>
    <li>Quantidade: {{$itensentrada->quantidade}}</li>
    <li>Unidade: {{$itensentrada->unidade}}</li>
    <li>IPI: {{$itensentrada->ipi}}</li>
    <li>Frete: {{$itensentrada->frete}}</li>
    <li>ICMS: {{$itensentrada->icms}}</li>
    <li>ID entrada: {{$itensentrada->entrada_id}}</li>
    <li>ID produto: {{$itensentrada->produto_id}}</li>
    <li> <a href="edit/{{$itensentrada->id}}">Editar Itens entrada</a></li>

    <form action="../itensentrada/{{$itensentrada->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
</ul>
@endforeach 
