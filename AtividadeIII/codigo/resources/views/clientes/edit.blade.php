<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de clientes</title>
</head>
<body>
    
<form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Nome cliente</label>
     <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco" value="{{$cliente->endereco}}">
     <label for="">Débito</label>
     <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
      <input type="submit" value="Alterar">
    </form>

</body>
</html>