<h1>Página de cadastro de itensentradas</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de itensentradas</title>
</head>
<body>
    <form action="store" method="post">
        @csrf 
     
     <label for="">Preco de compra</label>
     <input type="text" name="precocompra" id="precocompra">
     <label for="">Quantidade</label>
     <input type="text" name="quantidade" id="quantidade">
     <label for="">Unidade</label>
     <input type="text" name="unidade" id="unidade">
     <label for="">Ipi</label>
     <input type="text" name="ipi" id="ipi">
     <label for="">Frete</label>
     <input type="text" name="frete" id="frete">
     <label for="">Icms</label>
     <input type="text" name="icms" id="icms">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html>