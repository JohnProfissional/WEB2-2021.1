@extends('layouts.main')

@section('titulo', 'Edição de vendas')

@section('conteudo')
    
    <div id="form">      
<form action="{{route('venda.update', ['id' => $venda->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Data da venda</label>
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

     <label for="">ID cliente</label>
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
