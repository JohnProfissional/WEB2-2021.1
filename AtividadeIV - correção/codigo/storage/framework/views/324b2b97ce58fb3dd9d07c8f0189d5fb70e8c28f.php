<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Vendas</title>
</head>
<body>
    
<form action="<?php echo e(route('venda.update', ['id' => $venda->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Data da venda</label>
     <input type="text" name="datavenda" id="datavenda" value="<?php echo e($venda->datavenda); ?>">
     <label for="">Desconto total</label>
     <input type="text" name="descontototal" id="descontototal" value="<?php echo e($venda->descontototal); ?>">
     <label for="">Desconto acerto</label>
     <input type="text" name="descontoacerto" id="descontoacerto" value="<?php echo e($venda->descontoacerto); ?>">
     <label for="">Valor total</label>
     <input type="text" name="valortotal" id="valortotal" value="<?php echo e($venda->valortotal); ?>">
     <label for="">ID cliente</label>
     <input type="text" name="cliente_id" id="cliente_id" value="<?php echo e($venda->cliente_id); ?>">
      <input type="submit" value="Alterar">
    </form>

</body>
</html><?php /**PATH /var/www/projeto2/resources/views/vendas/edit.blade.php ENDPATH**/ ?>