



@extends('layouts.main')

@section('titulo', 'Edição de Forma_de_pagamentos')

@section('conteudo')

<div id="form">     
<form action="{{route('formadepagamentos.update', ['id' => $forma_de_pagamento->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Tipo do pagamento</label>
     <input type="text" class=" @error('tipopagamento') is-invalid @enderror" name="tipopagamento" id="tipopagamento" value="{{$forma_de_pagamento->tipopagamento}}">
     @error('tipopagamento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Números de parcelas</label>
     <input type="text" class=" @error('numeroparcelas') is-invalid @enderror" name="numeroparcelas" id="numeroparcelas" value="{{$forma_de_pagamento->numeroparcelas}}">
     @error('numeroparcelas')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Data da parcela</label>
     <input type="text" class=" @error('dataparcela') is-invalid @enderror" name="dataparcela" id="dataparcela" value="{{$forma_de_pagamento->dataparcela}}">
     @error('dataparcela')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID da Venda</label>
     <input type="text" class=" @error('venda_id') is-invalid @enderror" name="venda_id" id="venda_id" value="{{$forma_de_pagamento->venda_id}}">
     @error('venda_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')