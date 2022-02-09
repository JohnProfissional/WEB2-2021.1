
@extends('layouts.main')

@section('titulo', 'Cadastro de Contato_cliente')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('contatoclientes.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Contato do Cliente</h3></label><br><br>

    <div class="form-group">

     <label for="">Telefone</label>
     <input type="text" class=" @error('telefone') is-invalid @enderror" name="telefone" id="telefone"><br><br>
     @error('telefone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   
        
     <label for="">Email</label>
     <input type="text" class=" @error('email') is-invalid @enderror" name="email" id="email"><br><br>
     @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Whatsapp</label>
     <input type="text" class=" @error('whatsapp') is-invalid @enderror" name="whatsapp" id="whatsapp"><br><br>
     @error('whatsapp')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID do Cliente</label>
     <input type="text" class=" @error('cliente_id') is-invalid @enderror" name="cliente_id" id="cliente_id"><br><br>
     @error('cliente_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
