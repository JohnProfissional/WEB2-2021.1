
@extends('layouts.main')

@section('titulo', 'Cadastro de produtos')

@section('conteudo')
    
    <div id="form">  
    <form action="{{route('produtos.store')}}" method="post">
        @csrf 
        <div class="title">
        <label for=""><h3>Cadastrar Produto</h3></label><br><br>
        </div>
    <div class="input">
        <label for="">Nome do produto</label>
        <input type="text" class=" @error('nomeproduto') is-invalid @enderror" name="nomeproduto" id="nomeproduto"><br><br>
         @error('nomeproduto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror 
    </div>
    <div class="input">
     <label for="">Quantidade</label>
     <input type="text" class=" @error('quantidade') is-invalid @enderror" name="quantidade" id="quantidade"><br><br>
     @error('quantidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
    </div>
    <div class="input">
     <label for="">Data de vencimento</label>
     <input type="text" class=" @error('datavencimento') is-invalid @enderror" name="datavencimento" id="datavencimento"><br><br>
     @error('datavencimento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
    </div>
    <div class="inputcad">
      <input type="submit" value="Cadastrar"><br><br>
      </div>
    </form>
    </div>

@endsection('conteudo')