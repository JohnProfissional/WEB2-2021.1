<h1>Página de cadastro de clientes</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <form action="<?php echo e(route('clientes.store')); ?>" method="post">
        <?php echo csrf_field(); ?> 
     <label for="">Nome cliente</label>
     <input type="text" name="nome" id="nome">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco">
     <label for="">Débito</label>
     <input type="text" name="debito" id="debito">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html><?php /**PATH /var/www/projeto2/resources/views/clientes/create.blade.php ENDPATH**/ ?>