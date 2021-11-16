<?php $__env->startSection('titulo', 'Consulta de produtos'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<label for=""><h1>Página de consulta de Produtos</h1></label><br>
<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do produto: <?php echo e($produto->nomeproduto); ?></li>
    <li>Quantidade: <?php echo e($produto->quantidade); ?></li>
    <li>Data de vencimento: <?php echo e($produto->datavencimento); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/produtos/show.blade.php ENDPATH**/ ?>