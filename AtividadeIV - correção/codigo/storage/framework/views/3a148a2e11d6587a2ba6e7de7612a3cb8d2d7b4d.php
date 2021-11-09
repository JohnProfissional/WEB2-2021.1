<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de endereços</title>
</head>
<body>
    
<form action="<?php echo e(route('endereco.update', ['id' => $endereco->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Logradouro</label>
     <input type="text" name="logradouro" id="logradouro" value="<?php echo e($endereco->logradouro); ?>">
     <label for="">Bairro</label>
     <input type="text" name="bairro" id="bairro" value="<?php echo e($endereco->bairro); ?>">
     <label for="">Cidade</label>
     <input type="text" name="cidade" id="cidade" value="<?php echo e($endereco->cidade); ?>">
     <label for="">UF</label>
     <input type="text" name="uf" id="uf" value="<?php echo e($endereco->uf); ?>">
     <label for="">ID cliente</label>
     <input type="text" name="cliente_id" id="cliente_id" value="<?php echo e($endereco->cliente_id); ?>">
      <input type="submit" value="Alterar">
    </form>

</body>
</html><?php /**PATH /var/www/projeto2/resources/views/enderecos/edit.blade.php ENDPATH**/ ?>