<?php $__env->startSection('titulo', 'Página de categorias'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">

<label for=""><h1>Página de categorias</h1></label><br>
<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<ul>    
    <li>Nome da categoria: <?php echo e($categoria->nomecategoria); ?></li>
    
    <li> <a href="<?php echo e(route ('categorias.edit', ['id' => $categoria->id])); ?>">Editar Categoria</a></li><br>

    <form action="<?php echo e(route ('categorias.delete',  ['id' => $categoria->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/sistemadevendas/resources/views/categorias/index.blade.php ENDPATH**/ ?>