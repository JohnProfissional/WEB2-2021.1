<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Itens vendas</title>
</head>
<body>
    
<form action="<?php echo e(route('itensvenda.update', ['id' => $itensvenda->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Quantidade de itens</label>
     <input type="text" name="quantidadeitens" id="quantidadeitens" value="<?php echo e($itensvenda->quantidadeitens); ?>">
     <label for="">Valor</label>
     <input type="text" name="valor" id="valor" value="<?php echo e($itensvenda->valor); ?>">
     <label for="">Desconto</label>
     <input type="text" name="desconto" id="desconto" value="<?php echo e($itensvenda->desconto); ?>">
      <input type="submit" value="Alterar">
    </form>

</body>
</html><?php /**PATH /var/www/projeto2/resources/views/itensvendas/edit.blade.php ENDPATH**/ ?>