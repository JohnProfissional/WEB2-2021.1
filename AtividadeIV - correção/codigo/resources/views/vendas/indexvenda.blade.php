<h1>Página de vendas</h1>

@foreach ($vendas as $venda)
<ul>
    <li>Data da venda: {{$venda->datavenda}}</li>
    <li>Desconto total: {{$venda->descontototal}}</li>
    <li>Desconto acerto: {{$venda->descontoacerto}}</li>
    <li>Valor total: {{$venda->valortotal}}</li>
    <li>ID cliente: {{$venda->cliente_id}}</li>
    <li> <a href="edit/{{$venda->id}}">Editar venda</a></li>

    <form action="../venda/{{$venda->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
</ul>
@endforeach 
