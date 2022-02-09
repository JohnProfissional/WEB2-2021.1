


@extends('layouts.main')

@section('titulo', 'Página de Pagamentos')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Pagamentos</h1></label><br>
@foreach ($pagamentos as $pagamento)

<ul>    
    <li>Valor do Pagamento: {{$pagamento->valorpagamento}}</li>
    <li>Data do Pagamento: {{$pagamento->datapagamento}}</li>
    <li>Números de parcelas: {{$pagamento->numerosdeparcelas}}</li>    
    <li> <a href="{{route ('pagamentos.edit', ['id' => $pagamento->id])}}">Editar Pagamento</a></li><br>

    <form action="{{route ('pagamentos.delete',  ['id' => $pagamento->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
