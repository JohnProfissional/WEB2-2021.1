<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de produtos</title>
</head>
<body>
    
<form action="<?php echo e(route('produtos.update', ['id' => $produto->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Nome do produto</label>
     <input type="text" name="nomeproduto" id="nomeproduto" value="<?php echo e($produto->nomeproduto); ?>">
     <label for="">Quantidade</label>
     <input type="text" name="quantidade" id="quantidade" value="<?php echo e($produto->quantidade); ?>">
     <label for="">Data de vencimento</label>
     <input type="text" name="datavencimento" id="datavencimento" value="<?php echo e($produto->datavencimento); ?>">
      <input type="submit" value="Alterar">
    </form>

</body>
</html><?php /**PATH /var/www/projeto2/resources/views/produtos/edit.blade.php ENDPATH**/ ?>