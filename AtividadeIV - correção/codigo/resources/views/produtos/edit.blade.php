<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de produtos</title>
</head>
<body>
    
<form action="{{route('produtos.update', ['id' => $produto->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Nome do produto</label>
     <input type="text" name="nomeproduto" id="nomeproduto" value="{{$produto->nomeproduto}}">
     <label for="">Quantidade</label>
     <input type="text" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
     <label for="">Data de vencimento</label>
     <input type="text" name="datavencimento" id="datavencimento" value="{{$produto->datavencimento}}">
      <input type="submit" value="Alterar">
    </form>

</body>
</html>