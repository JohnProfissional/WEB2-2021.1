<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de entradas</title>
</head>
<body>
    
    <form action="{{route('entrada.update', ['id' => $entrada->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Valor total da nota</label>
     <input type="text" name="valortotaldanota" id="valortotaldanota">
     <label for="">Data da entrada</label>
     <input type="text" name="dataentrada" id="dataentrada">
      <input type="submit" value="Alterar">
    </form>

</body>
</html>