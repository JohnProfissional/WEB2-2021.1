<h1>Página de consulta de itensentradas</h1>

<?php $__currentLoopData = $itensentradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itensentrada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Preco de compra: <?php echo e($itensentrada->precocompra); ?></li>
    <li>Quantidade: <?php echo e($itensentrada->quantidade); ?></li>
    <li>Unidade: <?php echo e($itensentrada->unidade); ?></li>
    <li>IPI: <?php echo e($itensentrada->ipi); ?></li>
    <li>Frete: <?php echo e($itensentrada->frete); ?></li>
    <li>ICMS: <?php echo e($itensentrada->icms); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php /**PATH /var/www/projeto2/resources/views/itensentradas/show.blade.php ENDPATH**/ ?>