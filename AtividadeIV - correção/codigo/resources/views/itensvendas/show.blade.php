<h1>Página de consulta de itensvendas</h1>

@foreach ($itensvendas as $itensvenda)
<ul>
    <li>Quantidade de itens: {{$itensvenda->quantidadeitens}}</li>
    <li>Valor: {{$itensvenda->valor}}</li>
    <li>Desconto: {{$itensvenda->desconto}}</li>
    <li>ID da venda: {{$itensvenda->venda_id}}</li>
    <li>ID do produto: {{$itensvenda->produto_id}}</li>
</ul>
@endforeach 