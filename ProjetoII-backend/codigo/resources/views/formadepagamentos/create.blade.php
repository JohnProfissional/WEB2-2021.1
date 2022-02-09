

@extends('layouts.main')

@section('titulo', 'Cadastro de Forma_de_pagamento')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('formadepagamentos.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Forma_de_pagamento</h3></label><br><br> 

    <div class="form-group">

     <label for="">Tipo do pagamento</label>
     <input type="text" class=" @error('tipopagamento') is-invalid @enderror" name="tipopagamento" id="tipopagamento"><br><br>
     @error('tipopagamento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
        
     <label for="">Números de parcelas</label>
     <input type="text" class=" @error('numeroparcelas') is-invalid @enderror" name="numeroparcelas" id="numeroparcelas"><br><br>
     @error('numeroparcelas')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Data da parcela</label>
     <input type="text" class=" @error('dataparcela') is-invalid @enderror" name="dataparcela" id="dataparcela"><br><br>
     @error('dataparcela')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID da venda</label>
     <input type="text" class=" @error('venda_id') is-invalid @enderror" name="venda_id" id="venda_id"><br><br>
     @error('venda_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
