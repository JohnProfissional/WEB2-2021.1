<h1>Página de consulta de produtos</h1>


<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do produto: <?php echo e($produto->nomeproduto); ?></li>
    <li>Quantidade: <?php echo e($produto->quantidade); ?></li>
    <li>Data de vencimento: <?php echo e($produto->datavencimento); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php /**PATH /var/www/projeto2/resources/views/produtos/show.blade.php ENDPATH**/ ?>