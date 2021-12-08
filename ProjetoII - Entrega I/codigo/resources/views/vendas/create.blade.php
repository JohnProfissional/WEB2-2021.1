

@extends('layouts.main')

@section('titulo', 'Cadastro de Vendas')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('vendas.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Venda</h3></label><br><br>

    <div class="form-group">

     <label for="">Data da venda</label>
     <input type="text" class=" @error('datavenda') is-invalid @enderror" name="datavenda" id="datavenda"><br><br>
     @error('datavenda')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
        
     <label for="">Desconto total</label>
     <input type="text" class=" @error('descontototal') is-invalid @enderror" name="descontototal" id="descontototal"><br><br>
     @error('descontototal')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Desconto acerto</label>
     <input type="text" class=" @error('descontoacerto') is-invalid @enderror" name="descontoacerto" id="descontoacerto"><br><br>
     @error('descontoacerto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Valor total</label>
     <input type="text" class=" @error('valortotal') is-invalid @enderror" name="valortotal" id="valortotal"><br><br>
     @error('valortotal')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">ID do Usuário</label>
     <input type="text" class=" @error('usuario_id') is-invalid @enderror" name="usuario_id" id="usuario_id"><br><br>
     @error('usuario_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
     <label for="">ID do Cliente</label>
     <input type="text"  name="cliente_id" id="cliente_id"><br><br>
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
