<h1>Página de cadastro de entradas</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de entradas</title>
</head>
<body>
    <form action="store" method="post">
        @csrf 
     <label for="">Id entrada</label>
     <input type="text" name="identrada" id="identrada">
     <label for="">Valortotal da NOta</label>
     <input type="text" name="valortotaldanota" id="valortotaldanota">
     <label for="">Data da entrada</label>
     <input type="text" name="dataentrada" id="dataentrada">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html>