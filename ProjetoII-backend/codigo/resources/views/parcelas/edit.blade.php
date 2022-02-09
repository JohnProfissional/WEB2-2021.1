

@extends('layouts.main')

@section('titulo', 'Edição de Parcelas')

@section('conteudo')

<div id="form">     
<form action="{{route('parcelas.update', ['id' => $parcela->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Números de parcelas</label>
     <input type="text" class=" @error('numerodeparcelas') is-invalid @enderror" name="numerodeparcelas" id="numerodeparcelas" value="{{$parcela->numerodeparcelas}}">
     @error('numerodeparcelas')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Valor da parcela</label>
     <input type="text" class=" @error('valorparcela') is-invalid @enderror" name="valorparcela" id="valorparcela" value="{{$parcela->valorparcela}}">
     @error('valorparcela')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Status</label>
     <input type="text" class=" @error('status') is-invalid @enderror" name="status" id="status" value="{{$parcela->status}}">
     @error('status')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Vencimento</label>
     <input type="text" class=" @error('vencimento') is-invalid @enderror" name="vencimento" id="vencimento" value="{{$parcela->vencimento}}">
     @error('vencimento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Valor total da parcela</label>
     <input type="text" class=" @error('valortotaldaparcela') is-invalid @enderror" name="valortotaldaparcela" id="valortotaldaparcela" value="{{$parcela->valortotaldaparcela}}">
     @error('valortotaldaparcela')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID da forma_de_pagamento</label>
     <input type="text" class=" @error('forma_de_pagamento_id') is-invalid @enderror" name="forma_de_pagamento_id" id="forma_de_pagamento_id" value="{{$parcela->forma_de_pagamento_id}}">
     @error('forma_de_pagamento_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID do pagamento</label>
     <input type="text" class=" @error('pagamento_id') is-invalid @enderror" name="pagamento_id" id="pagamento_id" value="{{$parcela->pagamento_id}}">
     @error('pagamento_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')