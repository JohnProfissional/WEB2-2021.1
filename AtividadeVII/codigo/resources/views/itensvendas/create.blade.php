
@extends('layouts.main')

@section('titulo', 'Cadastro de itens vendas')

@section('conteudo')
    
    <div id="form"> 
    <form action="{{route('itensvenda.store')}}" method="post">
        @csrf 
        <label for=""><h3>Página de cadastro de Itens Vendas</h3></label><br><br>
     <label for="">Quantidade de itens</label>
     <input type="text" class=" @error('quantidadeitens') is-invalid @enderror" name="quantidadeitens" id="quantidadeitens"><br><br>
     @error('quantidadeitens')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">Valor</label>
     <input type="text" class=" @error('valor') is-invalid @enderror" name="valor" id="valor"><br><br>
     @error('valor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">Desconto</label>
     <input type="text" class=" @error('desconto') is-invalid @enderror" name="desconto" id="desconto"><br><br>
     @error('desconto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for=""> ID da venda</label>
     <input type="text" class=" @error('venda_id') is-invalid @enderror" name="venda_id" id="venda_id"><br><br>
     @error('venda_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">ID do produto</label>
     <input type="text" class=" @error('produto_id') is-invalid @enderror" name="produto_id" id="produto_id"><br><br>
     @error('produto_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>
@endsection('conteudo')
