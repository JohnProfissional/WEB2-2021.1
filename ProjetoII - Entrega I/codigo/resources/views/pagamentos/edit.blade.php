



@extends('layouts.main')

@section('titulo', 'Edição de Pagamentos')

@section('conteudo')

<div id="form">     
<form action="{{route('pagamentos.update', ['id' => $pagamento->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Valor do Pagamento</label>
     <input type="text" class=" @error('valorpagamento') is-invalid @enderror" name="valorpagamento" id="valorpagamento" value="{{$pagamento->valorpagamento}}">
     @error('valorpagamento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Data do Pagamento</label>
     <input type="text" class=" @error('datapagamento') is-invalid @enderror" name="datapagamento" id="datapagamento" value="{{$pagamento->datapagamento}}">
     @error('datapagamento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Números de parcelas</label>
     <input type="text" class=" @error('numerosdeparcelas') is-invalid @enderror" name="numerosdeparcelas" id="numerosdeparcelas" value="{{$pagamento->numerosdeparcelas}}">
     @error('numerosdeparcelas')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')