<h1>Página de consulta de itensvendas</h1>

<?php $__currentLoopData = $itensvendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itensvenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Quantidade de itens: <?php echo e($itensvenda->quantidadeitens); ?></li>
    <li>Valor: <?php echo e($itensvenda->valor); ?></li>
    <li>Desconto: <?php echo e($itensvenda->desconto); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php /**PATH /var/www/projeto2/resources/views/itensvendas/show.blade.php ENDPATH**/ ?>