<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Vendas</title>
</head>
<body>
    
<form action="{{route('venda.update', ['id' => $venda->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Data da venda</label>
     <input type="text" name="datavenda" id="datavenda" value="{{$venda->datavenda}}">
     <label for="">Desconto total</label>
     <input type="text" name="descontototal" id="descontototal" value="{{$venda->descontototal}}">
     <label for="">Desconto acerto</label>
     <input type="text" name="descontoacerto" id="descontoacerto" value="{{$venda->descontoacerto}}">
     <label for="">Valor total</label>
     <input type="text" name="valortotal" id="valortotal" value="{{$venda->valortotal}}">
     <label for="">ID cliente</label>
     <input type="text" name="cliente_id" id="cliente_id" value="{{$venda->cliente_id}}">
      <input type="submit" value="Alterar">
    </form>

</body>
</html>