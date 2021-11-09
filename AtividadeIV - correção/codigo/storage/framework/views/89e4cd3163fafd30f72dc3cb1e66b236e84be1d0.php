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
    <form action="<?php echo e(route('entrada.store')); ?>" method="post">
        <?php echo csrf_field(); ?> 
     
     <label for="">Valor total da nota</label>
     <input type="text" name="valortotaldanota" id="valortotaldanota">
     <label for="">Data da entrada</label>
     <input type="text" name="dataentrada" id="dataentrada">
     <label for="">ID Fornecedor</label>
     <input type="text" name="fornecedor_id" id="fornecedor_id">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html><?php /**PATH /var/www/projeto2/resources/views/entradas/create.blade.php ENDPATH**/ ?>