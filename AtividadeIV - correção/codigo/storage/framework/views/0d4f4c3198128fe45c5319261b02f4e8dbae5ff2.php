<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de clientes</title>
</head>
<body>
    
<form action="<?php echo e(route('clientes.update', ['id' => $cliente->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Nome cliente</label>
     <input type="text" name="nome" id="nome" value="<?php echo e($cliente->nome); ?>">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco" value="<?php echo e($cliente->endereco); ?>">
     <label for="">Débito</label>
     <input type="text" name="debito" id="debito" value="<?php echo e($cliente->debito); ?>">
      <input type="submit" value="Alterar">
    </form>

</body>
</html><?php /**PATH /var/www/projeto2/resources/views/clientes/edit.blade.php ENDPATH**/ ?>