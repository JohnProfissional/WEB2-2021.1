<?php $__env->startSection('titulo', 'Edição de entradas'); ?>

<?php $__env->startSection('conteudo'); ?>
    
    <div id="form">     
    <form action="<?php echo e(route('entrada.update', ['id' => $entrada->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Valor total da nota</label>
     <input type="text" name="valortotaldanota" id="valortotaldanota" value="<?php echo e($entrada->valortotaldanota); ?>">
     <label for="">Data da entrada</label>
     <input type="text" name="dataentrada" id="dataentrada" value="<?php echo e($entrada->dataentrada); ?>">
     <label for="">ID fornecedor</label>
     <input type="text" name="fornecedor_id" id="fornecedor_id" value="<?php echo e($entrada->fornecedor_id); ?>">
      <input type="submit" value="Alterar">
    </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/entradas/edit.blade.php ENDPATH**/ ?>