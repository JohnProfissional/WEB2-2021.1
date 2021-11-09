<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de fornecedores</title>
</head>
<body>
    
<form action="<?php echo e(route('fornecedores.update', ['id' => $fornecedor->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Nome do fornecedor</label>
     <input type="text" name="nomefornecedor" id="nomefornecedor" value="<?php echo e($fornecedor->nomefornecedor); ?>">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco" value="<?php echo e($fornecedor->endereco); ?>">
     <label for="">Email</label>
     <input type="text" name="email" id="email" value="<?php echo e($fornecedor->email); ?>">
      <input type="submit" value="Alterar">
    </form>

</body>
</html><?php /**PATH /var/www/projeto2/resources/views/fornecedores/edit.blade.php ENDPATH**/ ?>