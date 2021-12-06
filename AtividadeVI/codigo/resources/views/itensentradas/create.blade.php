
@extends('layouts.main')

@section('titulo', 'Cadastro de itens entradas')

@section('conteudo')
    
    <div id="form"> 
    <form action="{{route('itensentrada.store')}}" method="post">
        @csrf 
        <label for=""><h3>Página de cadastro de Itens Entradas</h3></label><br><br>
     <label for="">Preco de compra</label>
     <input type="text" class=" @error('precocompra') is-invalid @enderror" name="precocompra" id="precocompra"><br><br>
     @error('precocompra')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">Quantidade</label>
     <input type="text" class=" @error('quantidade') is-invalid @enderror"name="quantidade" id="quantidade"><br><br>
     @error('quantidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">Unidade</label>
     <input type="text" class=" @error('unidade') is-invalid @enderror" name="unidade" id="unidade"><br><br>
     @error('unidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">Ipi</label>
     <input type="text" class=" @error('ipi') is-invalid @enderror" name="ipi" id="ipi"><br><br>
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
     <label for="">Icms</label>
     <input type="text" class=" @error('icms') is-invalid @enderror" name="icms" id="icms"><br><br>
     @error('icms')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">ID entrada</label>
     <input type="text" class=" @error('entrada_id') is-invalid @enderror" name="entrada_id" id="entrada_id"><br><br>
     @error('entrada_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">ID produto</label>
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