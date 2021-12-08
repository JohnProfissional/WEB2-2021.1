
@extends('layouts.main')

@section('titulo', 'Cadastro de Contato Fornecedores')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('contatofornecedores.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Contato do Fornecedor</h3></label><br><br>

    <div class="form-group">
        
     <label for="">Telefone do Fornecedor</label>
     <input type="text" class=" @error('telefonefornecedor') is-invalid @enderror" name="telefonefornecedor" id="telefonefornecedor"><br><br>
     @error('telefonefornecedor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
        
     <label for="">Whatsapp do Fornecedor</label>
     <input type="text" class=" @error('whatsappfornecedor') is-invalid @enderror" name="whatsappfornecedor" id="whatsappfornecedor"><br><br>
     @error('whatsappfornecedor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 


     <label for="">Email do Fornecedor</label>
     <input type="text" class=" @error('emailfornecedor') is-invalid @enderror" name="emailfornecedor" id="emailfornecedor"><br><br>
     @error('emailfornecedor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID do Fornecedor</label>
     <input type="text" class=" @error('fornecedor_id') is-invalid @enderror" name="fornecedor_id" id="fornecedor_id"><br><br>
     @error('fornecedor_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
