<h1>Página de vendas</h1>

<?php $__currentLoopData = $vendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Data da venda: <?php echo e($venda->datavenda); ?></li>
    <li>Desconto total: <?php echo e($venda->descontototal); ?></li>
    <li>Desconto acerto: <?php echo e($venda->descontoacerto); ?></li>
    <li>Valor total: <?php echo e($venda->valortotal); ?></li>
    <li>ID cliente: <?php echo e($venda->cliente_id); ?></li>
    <li> <a href="edit/<?php echo e($venda->id); ?>">Editar venda</a></li>

    <form action="../venda/<?php echo e($venda->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar">

    </form>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php /**PATH /var/www/projeto2/resources/views/vendas/indexvenda.blade.php ENDPATH**/ ?>