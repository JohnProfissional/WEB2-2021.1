<h1>Página de consulta de vendas</h1>

@foreach ($vendas as $venda)
<ul>
    <li>Data da venda: {{$venda->datavenda}}</li>
    <li>Desconto total: {{$venda->descontototal}}</li>
    <li>Desconto acerto: {{$venda->descontoacerto}}</li>
    <li>Valor total: {{$venda->valortotal}}</li>
    <li>ID cliente: {{$venda->cliente_id}}</li>
</ul>
@endforeach 
