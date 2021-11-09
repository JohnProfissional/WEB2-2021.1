<h1>Página de cadastro de vendas</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de vendas</title>
</head>
<body>
    <form action="{{route('venda.store')}}" method="post">
        @csrf 
     <label for="">Data da venda</label>
     <input type="text" name="datavenda" id="datavenda">
     <label for="">Desconto total</label>
     <input type="text" name="descontototal" id="descontototal">
     <label for="">Desconto acerto</label>
     <input type="text" name="descontoacerto" id="descontoacerto">
     <label for="">Valor total</label>
     <input type="text" name="valortotal" id="valortotal">
     <label for="">ID cliente</label>
     <input type="text" name="cliente_id" id="cliente_id">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html>