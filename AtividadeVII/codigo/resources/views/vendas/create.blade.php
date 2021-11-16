

@extends('layouts.main')

@section('titulo', 'Cadastro de vendas')

@section('conteudo')
    
    <div id="form"> 
    <form action="{{route('venda.store')}}" method="post">
        @csrf 
        <label for=""><h3>Página de cadastro de Vendas</h3></label><br><br>
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
     <label for="">ID cliente</label>
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