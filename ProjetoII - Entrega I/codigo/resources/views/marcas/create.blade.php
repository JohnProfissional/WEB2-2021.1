
@extends('layouts.main')

@section('titulo', 'Cadastro das Marcas')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('marcas.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Marca</h3></label><br><br>

    <div class="form-group">

     <label for="">Nome da marca</label>
     <input type="text" class=" @error('nomedamarca') is-invalid @enderror" name="nomedamarca" id="nomedamarca"><br><br>
     @error('nomedamarca')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
