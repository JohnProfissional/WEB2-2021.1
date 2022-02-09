

@extends('layouts.main')

@section('titulo', 'Cadastro de Parcelas')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('parcelas.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Parcela</h3></label><br><br>

    <div class="form-group">

     <label for="">Números de parcelas</label>
     <input type="text" class=" @error('numerodeparcelas') is-invalid @enderror" name="numerodeparcelas" id="numerodeparcelas"><br><br>
     @error('numerodeparcelas')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
        
     <label for="">Valor da parcela</label>
     <input type="text" class=" @error('valorparcela') is-invalid @enderror" name="valorparcela" id="valorparcela"><br><br>
     @error('valorparcela')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Status</label>
     <input type="text" class=" @error('status') is-invalid @enderror" name="status" id="status"><br><br>
     @error('status')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Vencimento</label>
     <input type="text" class=" @error('vencimento') is-invalid @enderror" name="vencimento" id="vencimento"><br><br>
     @error('vencimento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Valor total da parcela</label>
     <input type="text" class=" @error('valortotaldaparcela') is-invalid @enderror" name="valortotaldaparcela" id="valortotaldaparcela"><br><br>
     @error('valortotaldaparcela')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
     <label for="">ID da forma_de_pagamento</label>
     <input type="text" class=" @error('forma_de_pagamento_id') is-invalid @enderror" name="forma_de_pagamento_id" id="forma_de_pagamento_id"><br><br>
     @error('forma_de_pagamento_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID do pagamento</label>
     <input type="text" class=" @error('pagamento_id') is-invalid @enderror" name="pagamento_id" id="pagamento_id"><br><br>
     @error('pagamento_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
