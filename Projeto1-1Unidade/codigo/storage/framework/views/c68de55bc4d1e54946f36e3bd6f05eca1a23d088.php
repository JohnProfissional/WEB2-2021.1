<?php $__env->startSection('titulo', 'Consulta de itens vendas'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<label for=""><h1>Página de consultas de Itens Vendas</h1></label><br>
<?php $__currentLoopData = $itensvendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itensvenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Quantidade de itens: <?php echo e($itensvenda->quantidadeitens); ?></li>
    <li>Valor: <?php echo e($itensvenda->valor); ?></li>
    <li>Desconto: <?php echo e($itensvenda->desconto); ?></li>
    <li>ID da venda: <?php echo e($itensvenda->venda_id); ?></li>
    <li>ID do produto: <?php echo e($itensvenda->produto_id); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/itensvendas/show.blade.php ENDPATH**/ ?>