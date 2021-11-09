<h1>Página de cadastro de itensentradas</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de itensentradas</title>
</head>
<body>
    <form action="<?php echo e(route('itensentrada.store')); ?>" method="post">
        <?php echo csrf_field(); ?> 
     
     <label for="">Preco de compra</label>
     <input type="text" name="precocompra" id="precocompra">
     <label for="">Quantidade</label>
     <input type="text" name="quantidade" id="quantidade">
     <label for="">Unidade</label>
     <input type="text" name="unidade" id="unidade">
     <label for="">Ipi</label>
     <input type="text" name="ipi" id="ipi">
     <label for="">Frete</label>
     <input type="text" name="frete" id="frete">
     <label for="">Icms</label>
     <input type="text" name="icms" id="icms">
     <label for="">ID entrada</label>
     <input type="text" name="entrada_id" id="entrada_id">
     <label for="">ID produto</label>
     <input type="text" name="produto_id" id="produto_id">
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html><?php /**PATH /var/www/projeto2/resources/views/itensentradas/create.blade.php ENDPATH**/ ?>