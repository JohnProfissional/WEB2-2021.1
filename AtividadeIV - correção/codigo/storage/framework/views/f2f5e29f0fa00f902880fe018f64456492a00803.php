<h1>Página de cadastro de Itensvendas</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Itensvendas</title>
</head>
<body>
    <form action="<?php echo e(route('itensvenda.store')); ?>" method="post">
        <?php echo csrf_field(); ?> 
     <label for="">Quantidade de itens</label>
     <input type="text" name="quantidadeitens" id="quantidadeitens">
     <label for="">Valor</label>
     <input type="text" name="valor" id="valor">
     <label for="">Desconto</label>
     <input type="text" name="desconto" id="desconto">
     <label for=""> ID da venda</label>
     <input type="text" name="venda_id" id="venda_id">
     <label for="">ID do produto</label>
     <input type="text" name="produto_id" id="produto_id">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html><?php /**PATH /var/www/projeto2/resources/views/itensvendas/create.blade.php ENDPATH**/ ?>