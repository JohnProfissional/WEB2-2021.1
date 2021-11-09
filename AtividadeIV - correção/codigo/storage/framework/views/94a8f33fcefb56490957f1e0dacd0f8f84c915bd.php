<h1>Página de cadastro de vendas</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de vendas</title>
</head>
<body>
    <form action="<?php echo e(route('venda.store')); ?>" method="post">
        <?php echo csrf_field(); ?> 
     <label for="">Data da venda</label>
     <input type="text" name="datavenda" id="datavenda">
     <label for="">Desconto total</label>
     <input type="text" name="descontototal" id="descontototal">
     <label for="">Desconto acerto</label>
     <input type="text" name="descontoacerto" id="descontoacerto">
     <label for="">Valor total</label>
     <input type="text" name="valortotal" id="valortotal">
     <label for="">ID cliente</label>
     <input type="text" name="cliente_id" id="cliente_id">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html><?php /**PATH /var/www/projeto2/resources/views/vendas/create.blade.php ENDPATH**/ ?>