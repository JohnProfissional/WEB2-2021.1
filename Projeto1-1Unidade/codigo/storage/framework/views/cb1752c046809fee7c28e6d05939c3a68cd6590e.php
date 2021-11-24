<?php $__env->startSection('titulo', 'Página de itens entradas'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<label for=""><h1>Página de Itens Entradas</h1></label><br>
<?php $__currentLoopData = $itensentradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itensentrada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Preco de compra: <?php echo e($itensentrada->precocompra); ?></li>
    <li>Quantidade: <?php echo e($itensentrada->quantidade); ?></li>
    <li>Unidade: <?php echo e($itensentrada->unidade); ?></li>
    <li>IPI: <?php echo e($itensentrada->ipi); ?></li>
    <li>Frete: <?php echo e($itensentrada->frete); ?></li>
    <li>ICMS: <?php echo e($itensentrada->icms); ?></li>
    <li>ID entrada: <?php echo e($itensentrada->entrada_id); ?></li>
    <li>ID produto: <?php echo e($itensentrada->produto_id); ?></li>
    <li> <a href="edit/<?php echo e($itensentrada->id); ?>">Editar Itens entrada</a></li>

    <form action="<?php echo e(route ('itensentrada.delete',  ['id' => $itensentrada->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar">

    </form>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/itensentradas/indexitensentrada.blade.php ENDPATH**/ ?>