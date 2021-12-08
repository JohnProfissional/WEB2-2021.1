

@extends('layouts.main')

@section('titulo', 'Cadastro de Devoluções')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('devolucoes.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Devolução</h3></label><br><br>

    <div class="form-group">

     <label for="">Data da devolucao</label>
     <input type="text" class=" @error('datadevolucao') is-invalid @enderror" name="datadevolucao" id="datadevolucao"><br><br>
     @error('datadevolucao')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
        
     <label for="">Descrição da devolucao</label>
     <input type="text" class=" @error('descricaodadevolucao') is-invalid @enderror" name="descricaodadevolucao" id="descricaodadevolucao"><br><br>
     @error('descricaodadevolucao')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Quantidade devolvida</label>
     <input type="text" class=" @error('quantidadedevolvida') is-invalid @enderror" name="quantidadedevolvida" id="quantidadedevolvida"><br><br>
     @error('quantidadedevolvida')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID dos Itens vendidos</label>
     <input type="text" class=" @error('itensvendas_id') is-invalid @enderror" name="itensvendas_id" id="itensvendas_id"><br><br>
     @error('itensvendas_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
