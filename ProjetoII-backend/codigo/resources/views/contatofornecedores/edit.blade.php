

@extends('layouts.main')

@section('titulo', 'Edição de Contato Fornecedores')

@section('conteudo')

<div id="form">     
<form action="{{route('contatofornecedores.update', ['id' => $contato_fornecedor->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Telefone do Fornecedor</label>
     <input type="text" class=" @error('telefonefornecedor') is-invalid @enderror" name="telefonefornecedor" id="telefonefornecedor" value="{{$contato_fornecedor->telefonefornecedor}}">
     @error('telefonefornecedor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Whatsapp do Fornecedor</label>
     <input type="text" class=" @error('whatsappfornecedor') is-invalid @enderror" name="whatsappfornecedor" id="whatsappfornecedor" value="{{$contato_fornecedor->whatsappfornecedor}}">
     @error('whatsappfornecedor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Email do Fornecedor</label>
     <input type="text" class=" @error('emailfornecedor') is-invalid @enderror" name="emailfornecedor" id="emailfornecedor" value="{{$contato_fornecedor->emailfornecedor}}">
     @error('emailfornecedor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID do Fornecedor</label>
     <input type="text" class=" @error('fornecedor_id') is-invalid @enderror" name="fornecedor_id" id="fornecedor_id" value="{{$contato_fornecedor->fornecedor_id}}">
     @error('fornecedor_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')