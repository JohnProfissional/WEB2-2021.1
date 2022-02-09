

@extends('layouts.main')

@section('titulo', 'Edição de Produtos')

@section('conteudo')

<div id="form">     
<form action="{{route('produtos.update', ['id' => $produto->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Nome do Produto</label>
     <input type="text" class=" @error('nomedoproduto') is-invalid @enderror" name="nomedoproduto" id="nomedoproduto" value="{{$produto->nomedoproduto}}">
     @error('nomedoproduto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">ICMS</label>
     <input type="text" class=" @error('icms') is-invalid @enderror" name="icms" id="icms" value="{{$produto->icms}}">
     @error('icms')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">IPI</label>
     <input type="text" class=" @error('ipi') is-invalid @enderror" name="ipi" id="ipi" value="{{$produto->ipi}}">
     @error('ipi')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Frete</label>
     <input type="text" class=" @error('frete') is-invalid @enderror" name="frete" id="frete" value="{{$produto->frete}}">
     @error('frete')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Valor na fábrica</label>
     <input type="text" class=" @error('valornafabrica') is-invalid @enderror" name="valornafabrica" id="valornafabrica" value="{{$produto->valornafabrica}}">
     @error('valornafabrica')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Valor de compra</label>
     <input type="text" class=" @error('valordecompra') is-invalid @enderror" name="valordecompra" id="valordecompra" value="{{$produto->valordecompra}}">
     @error('valordecompra')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
    
    <label for="">Lucro</label>
     <input type="text" class=" @error('lucro') is-invalid @enderror" name="lucro" id="lucro" value="{{$produto->lucro}}">
     @error('lucro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Valor de venda</label>
     <input type="text" class=" @error('valorvenda') is-invalid @enderror" name="valorvenda" id="valorvenda" value="{{$produto->valorvenda}}">
     @error('valorvenda')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Desconto</label>
     <input type="text" class=" @error('desconto') is-invalid @enderror" name="desconto" id="desconto" value="{{$produto->desconto}}">
     @error('desconto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Quantidade</label>
     <input type="text" class=" @error('quantidade') is-invalid @enderror" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
     @error('quantidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Data de vencimento</label>
     <input type="text" class=" @error('datavencimento') is-invalid @enderror" name="datavencimento" id="datavencimento" value="{{$produto->datavencimento}}">
     @error('datavencimento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID da Marca</label>
     <input type="text" class=" @error('marca_id') is-invalid @enderror" name="marca_id" id="marca_id" value="{{$produto->marca_id}}">
     @error('marca_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

    <label for="">ID da Categoria</label>
     <input type="text" class=" @error('categoria_id') is-invalid @enderror" name="categoria_id" id="categoria_id" value="{{$produto->categoria_id}}">
     @error('categoria_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')