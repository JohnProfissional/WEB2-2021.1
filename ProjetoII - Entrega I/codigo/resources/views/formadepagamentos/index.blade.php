




@extends('layouts.main')

@section('titulo', 'Página de Formas de Pagamentos')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Formas de Pagamentos</h1></label><br>
@foreach ($formadepagamentos as $formadepagamento)

<ul>    
    <li>Tipo do Pagamento: {{$formadepagamento->tipopagamento}}</li>
    <li>Números de parcelas: {{$formadepagamento->numeroparcelas}}</li>
    <li>Data da parcela: {{$formadepagamento->dataparcela}}</li>    
    <li>ID da Venda: {{$formadepagamento->venda_id}}</li>
    <li> <a href="{{route ('formadepagamentos.edit', ['id' => $formadepagamento->id])}}">Editar forma_de_pagamento</a></li><br>

    <form action="{{route ('formadepagamentos.delete',  ['id' => $formadepagamento->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
