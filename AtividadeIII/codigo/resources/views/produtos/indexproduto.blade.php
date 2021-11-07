<h1>Página de produtos</h1>


@foreach ($produtos as $produto)
<ul>
    <li>Nome do produto: {{$produto->nomeproduto}}</li>
    <li>Quantidade: {{$produto->quantidade}}</li>
    <li>Data de vencimento: {{$produto->datavencimento}}</li>
</ul>
@endforeach 