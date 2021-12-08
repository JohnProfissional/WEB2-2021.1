

@extends('layouts.main')

@section('titulo', 'Página de Contato fornecedores')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Contatos dos fornecedores</h1></label><br>
@foreach ($contatofornecedores as $contatofornecedor)

<ul>    
    <li>Telefone do fornecedor: {{$contatofornecedor->telefonefornecedor}}</li>
    <li>Whatsapp do fornecedor: {{$contatofornecedor->whatsappfornecedor}}</li>
    <li>Email do fornecedor: {{$contatofornecedor->emailfornecedor}}</li>    
    <li>ID do fornecedor: {{$contatofornecedor->fornecedor_id}}</li>
    <li> <a href="{{route ('contatofornecedores.edit', ['id' => $contatofornecedor->id])}}">Editar Contato_Fornecedor</a></li><br>

    <form action="{{route ('contatofornecedores.delete',  ['id' => $contatofornecedor->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
