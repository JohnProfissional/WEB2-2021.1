<h1>Página de produtos</h1>


<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do produto: <?php echo e($produto->nomeproduto); ?></li>
    <li>Quantidade: <?php echo e($produto->quantidade); ?></li>
    <li>Data de vencimento: <?php echo e($produto->datavencimento); ?></li>
    <li> <a href="edit/<?php echo e($produto->id); ?>">Editar produto</a></li>

    <form action="../produtos/<?php echo e($produto->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar">

    </form>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php /**PATH /var/www/projeto2/resources/views/produtos/indexproduto.blade.php ENDPATH**/ ?>