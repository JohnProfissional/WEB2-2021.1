<?php $__env->startSection('titulo', 'Página de entradas'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<label for=""><h1>Página de Entradas</h1></label><br>
<?php $__currentLoopData = $entradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Valor total da nota: <?php echo e($entrada->valortotaldanota); ?></li>
    <li>Data da entrada: <?php echo e($entrada->dataentrada); ?></li>
    <li>ID fornecedor: <?php echo e($entrada->fornecedor_id); ?></li>
    <li> <a href="edit/<?php echo e($entrada->id); ?>">Editar entrada</a></li>

    <form action="<?php echo e(route ('entradas.delete',  ['id' => $entrada->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar"><br><br>

    </form>
    
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/entradas/indexentrada.blade.php ENDPATH**/ ?>