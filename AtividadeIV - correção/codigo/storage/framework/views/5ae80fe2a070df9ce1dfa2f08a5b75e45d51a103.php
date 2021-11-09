<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Itens entrada</title>
</head>
<body>
    
<form action="<?php echo e(route('itensentrada.update', ['id' => $itensentrada->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Preço de compra</label>
     <input type="text" name="precocompra" id="precocompra" value="<?php echo e($itensentrada->precocompra); ?>">
     <label for="">Quantidade</label>
     <input type="text" name="quantidade" id="quantidade" value="<?php echo e($itensentrada->quantidade); ?>">
     <label for="">Unidade</label>
     <input type="text" name="unidade" id="unidade" value="<?php echo e($itensentrada->unidade); ?>">
     <label for="">IPI</label>
     <input type="text" name="ipi" id="ipi" value="<?php echo e($itensentrada->ipi); ?>">
     <label for="">Frete</label>
     <input type="text" name="frete" id="frete" value="<?php echo e($itensentrada->frete); ?>">
     <label for="">ICMS</label>
     <input type="text" name="icms" id="icms" value="<?php echo e($itensentrada->icms); ?>">
     <label for="">ID entrada</label>
     <input type="text" name="entrada_id" id="entrada_id" value="<?php echo e($itensentrada->entrada_id); ?>">
     <label for="">ID produto</label>
     <input type="text" name="produto_id" id="produto_id" value="<?php echo e($itensentrada->produto_id); ?>">
      <input type="submit" value="Alterar">
    </form>

</body>
</html><?php /**PATH /var/www/projeto2/resources/views/itensentradas/edit.blade.php ENDPATH**/ ?>