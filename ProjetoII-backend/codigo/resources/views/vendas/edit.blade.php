

@extends('layouts.main')

@section('titulo', 'Edição de Vendas')

@section('conteudo')

<div id="form">     
<form action="{{route('vendas.update', ['id' => $venda->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Data da Venda</label>
     <input type="text" class=" @error('datavenda') is-invalid @enderror" name="datavenda" id="datavenda" value="{{$venda->datavenda}}">
     @error('datavenda')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Desconto total</label>
     <input type="text" class=" @error('descontototal') is-invalid @enderror" name="descontototal" id="descontototal" value="{{$venda->descontototal}}">
     @error('descontototal')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Desconto acerto</label>
     <input type="text" class=" @error('descontoacerto') is-invalid @enderror" name="descontoacerto" id="descontoacerto" value="{{$venda->descontoacerto}}">
     @error('descontoacerto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Valor total</label>
     <input type="text" class=" @error('valortotal') is-invalid @enderror" name="valortotal" id="valortotal" value="{{$venda->valortotal}}">
     @error('valortotal')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID do Usuário</label>
     <input type="text" class=" @error('usuario_id') is-invalid @enderror" name="usuario_id" id="usuario_id" value="{{$venda->usuario_id}}">
     @error('usuario_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID do Cliente</label>
     <input type="text" class=" @error('cliente_id') is-invalid @enderror" name="cliente_id" id="cliente_id" value="{{$venda->cliente_id}}">
     @error('cliente_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')