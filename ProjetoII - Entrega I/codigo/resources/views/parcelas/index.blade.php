

@extends('layouts.main')

@section('titulo', 'Página de Parcelas')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Parcelas</h1></label><br>
@foreach ($parcelas as $parcela)

<ul>    
    <li>Números de parcelas: {{$parcela->numerodeparcelas}}</li>
    <li>Valor da parcela: {{$parcela->valorparcela}}</li>
    <li>Status: {{$parcela->status}}</li>
    <li>Vencimento: {{$parcela->vencimento}}</li>
    <li>Valor total da parcela: {{$parcela->valortotaldaparcela}}</li>
    <li>ID da Forma_de_pagamento: {{$parcela->forma_de_pagamento_id}}</li>
    <li>ID do Pagamento: {{$parcela->pagamento_id}}</li>
    <li> <a href="{{route ('parcelas.edit', ['id' => $parcela->id])}}">Editar Parcela</a></li><br>

    <form action="{{route ('parcelas.delete',  ['id' => $parcela->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
