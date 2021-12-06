
extends('layouts.main')

@section('titulo', 'Consulta de entradas')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de consulta de entradas</h1></label><br>
@foreach ($entradas as $entrada)
<ul>
    <li>Valor total da nota: {{$entrada->valortotaldanota}}</li>
    <li>Data da entrada: {{$entrada->dataentrada}}</li>
    <li>ID fornecedor: {{$entrada->fornecedor_id}}</li>
    
</ul>
@endforeach 
</div>

@endsection('conteudo')