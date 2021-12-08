

@extends('layouts.main')

@section('titulo', 'Cadastro de Produtos')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('produtos.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Produto</h3></label><br><br>

    <div class="form-group">

     <label for="">Nome do produto</label>
     <input type="text" class=" @error('nomedoproduto') is-invalid @enderror" name="nomedoproduto" id="nomedoproduto"><br><br>
     @error('nomedoproduto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
        
     <label for="">ICMS</label>
     <input type="text" class=" @error('icms') is-invalid @enderror" name="icms" id="icms"><br><br>
     @error('icms')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">IPI</label>
     <input type="text"  class=" @error('ipi') is-invalid @enderror" name="ipi" id="ipi"><br><br>
     @error('ipi')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Frete</label>
     <input type="text" class=" @error('frete') is-invalid @enderror" name="frete" id="frete"><br><br>
     @error('frete')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Valor na fábrica</label>
     <input type="text" class=" @error('valornafabrica') is-invalid @enderror" name="valornafabrica" id="valornafabrica"><br><br>
     @error('valornafabrica')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     
     <label for="">Valor de compra</label>
     <input type="text" class=" @error('valordecompra') is-invalid @enderror" name="valordecompra" id="valordecompra"><br><br>
     @error('valordecompra')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for=""> Lucro</label>
     <input type="text" class=" @error('lucro') is-invalid @enderror" name="lucro" id="lucro"><br><br>
     @error('lucro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Valor de venda</label>
     <input type="text" class=" @error('valorvenda') is-invalid @enderror" name="valorvenda" id="valorvenda"><br><br>
     @error('valorvenda')
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

     <label for="">Quantidade</label>
     <input type="text" class=" @error('quantidade') is-invalid @enderror" name="quantidade" id="quantidade"><br><br>
     @error('quantidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Data de vencimento</label>
     <input type="text" class=" @error('datavencimento') is-invalid @enderror" name="datavencimento" id="datavencimento"><br><br>
     @error('datavencimento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">ID da marca</label>
     <input type="text" class=" @error('marca_id') is-invalid @enderror" name="marca_id" id="marca_id"><br><br>
     @error('marca_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">ID da categoria</label>
     <input type="text" class=" @error('categoria_id') is-invalid @enderror" name="categoria_id" id="categoria_id"><br><br>
     @error('categoria_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
