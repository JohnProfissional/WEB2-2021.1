


@extends('layouts.main')

@section('titulo', 'Página de Produtos')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Produtos</h1></label><br>
@foreach ($produtos as $produto)

<ul>    
    <li>Nome do Produto: {{$produto->nomedoproduto}}</li>
    <li>ICMS: {{$produto->icms}}</li>
    <li>IPI: {{$produto->ipi}}</li>
    <li>Frete: {{$produto->frete}}</li>
    <li>Valor na Fábrica: {{$produto->valornafabrica}}</li>
    <li>Valor de compra: {{$produto->valordecompra}}</li>
    <li>Lucro: {{$produto->lucro}}</li>
    <li>Valor de venda: {{$produto->valorvenda}}</li>
    <li>Desconto: {{$produto->desconto}}</li>
    <li>Quantidade: {{$produto->quantidade}}</li>
    <li>Data de vencimento: {{$produto->datavencimento}}</li>
    <li>ID da Marca: {{$produto->marca_id}}</li>
    <li>ID da Categoria: {{$produto->categoria_id}}</li>
    <li> <a href="{{route ('produtos.edit', ['id' => $produto->id])}}">Editar Produto</a></li><br>

    <form action="{{route ('produtos.delete',  ['id' => $produto->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
