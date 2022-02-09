
@extends('layouts.main')

@section('titulo', 'Cadastro de pagamentos')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('pagamentos.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Pagamento</h3></label><br><br>

    <div class="form-group">

     <label for="">Valor do Pagamento</label>
     <input type="text" class=" @error('valorpagamento') is-invalid @enderror" name="valorpagamento" id="valorpagamento"><br><br>
     @error('valorpagamento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
        
     <label for="">Data do Pagamento</label>
     <input type="text" class=" @error('datapagamento') is-invalid @enderror" name="datapagamento" id="datapagamento"><br><br>
     @error('datapagamento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Números de Parcelas</label>
     <input type="text" class=" @error('numerosdeparcelas') is-invalid @enderror" name="numerosdeparcelas" id="numerosdeparcelas"><br><br>
     @error('numerosdeparcelas')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
 