<h1>Página de consulta de vendas</h1>

<?php $__currentLoopData = $vendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Data da venda: <?php echo e($venda->datavenda); ?></li>
    <li>Desconto total: <?php echo e($venda->descontototal); ?></li>
    <li>Desconto acerto: <?php echo e($venda->descontoacerto); ?></li>
    <li>Valor total: <?php echo e($venda->valortotal); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php /**PATH /var/www/projeto2/resources/views/vendas/show.blade.php ENDPATH**/ ?>