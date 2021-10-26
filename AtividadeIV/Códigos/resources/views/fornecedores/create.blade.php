<h1>Página de cadastro de fornecedores</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de fornecedores</title>
</head>
<body>
    <form action="store" method="post">
        @csrf 
     <label for="">Nome fornecedor</label>
     <input type="text" name="nome" id="nome">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco">
     <label for="">email</label>
     <input type="text" name="email" id="email">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html>