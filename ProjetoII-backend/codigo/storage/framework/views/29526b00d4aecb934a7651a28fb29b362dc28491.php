<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS Local -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">

    <title><?php echo $__env->yieldContent('titulo'); ?></title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Sistema de vendas</h1>
        </div>
        <div id="nav">
            <ul>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Fornecedores</a></li>
                <li><a href="#">Contato_Fornecedor</a></li>
                <li><a href="#">Entradas</a></li>
                <li><a href="#">Itens Entrada</a></li>
                <li><a href="#">Vendas</a></li>
                <li><a href="#">Itens Venda</a></li>
                <li><a href="#">Clientes</a></li>  
                <li><a href="#">Endereço_Cliente</a></li> 
                <li><a href="#">Contato_Cliente</a></li>              
                <li><a href="#">Usuário</a></li>                
                <li><a href="#">Parcelas</a></li><br><br>
                <li><a href="#">Pagamento</a></li>
                <li><a href="#">Forma_de_pagamento</a></li>
                <li><a href="#">Devolução</a></li>
                <li><a href="#">Marcas</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Prateleiras</a></li>
            </ul>
        </div>
        <div id="conteudo">
            <?php echo $__env->yieldContent('conteudo'); ?>
        </div>
        <div id="footer">
            Copyright @ WEB II - 2021.1
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>

</body>
</html><?php /**PATH /var/www/sistemadevendas/resources/views/layouts/main.blade.php ENDPATH**/ ?>