<h1>Página de cadastro de produtos</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form action="{{route('produtos.store')}}" method="post">
        @csrf 
     <label for="">Nome do produto</label>
     <input type="text" name="nomeproduto" id="nomeproduto">
     <label for="">Quantidade</label>
     <input type="text" name="quantidade" id="quantidade">
     <label for="">Data de vencimento</label>
     <input type="text" name="datavencimento" id="datavencimento">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html>