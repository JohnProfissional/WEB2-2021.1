<h1>Página de consulta de vendas</h1>


<?php $__env->startSection('titulo', 'Consulta de vendas'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<label for=""><h1>Página de consulta de Vendas</h1></label><br>
<?php $__currentLoopData = $vendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Data da venda: <?php echo e($venda->datavenda); ?></li>
    <li>Desconto total: <?php echo e($venda->descontototal); ?></li>
    <li>Desconto acerto: <?php echo e($venda->descontoacerto); ?></li>
    <li>Valor total: <?php echo e($venda->valortotal); ?></li>
    <li>ID cliente: <?php echo e($venda->cliente_id); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/vendas/show.blade.php ENDPATH**/ ?>