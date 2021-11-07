<h1>Página de cadastro de Itensvendas</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Itensvendas</title>
</head>
<body>
    <form action="store" method="post">
        @csrf 
     <label for="">QUantidade de itens</label>
     <input type="text" name="quantidadeitens" id="quantidadeitens">
     <label for="">Valor</label>
     <input type="text" name="valor" id="valor">
     <label for="">Desconto</label>
     <input type="text" name="desconto" id="desconto">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html>