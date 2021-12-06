<?php $__env->startSection('titulo', 'Página de itens vendas'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<label for=""><h1>Página de Itens Vendas</h1></label><br>
<?php $__currentLoopData = $itensvendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itensvenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Quantidade de itens: <?php echo e($itensvenda->quantidadeitens); ?></li>
    <li>Valor: <?php echo e($itensvenda->valor); ?></li>
    <li>Desconto: <?php echo e($itensvenda->desconto); ?></li>
    <li>ID da venda: <?php echo e($itensvenda->venda_id); ?></li>
    <li>ID do produto: <?php echo e($itensvenda->produto_id); ?></li>
    <li> <a href="edit/<?php echo e($itensvenda->id); ?>">Editar itensvenda</a></li>

    <form action="<?php echo e(route ('itensvenda.delete',  ['id' => $itensvenda->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar">

    </form>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/itensvendas/indexitensvenda.blade.php ENDPATH**/ ?>