<?php $__env->startSection('titulo', 'Edição de clientes'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">     
<form action="<?php echo e(route('clientes.update', ['id' => $cliente->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Nome cliente</label>
     <input type="text" name="nome" id="nome" value="<?php echo e($cliente->nome); ?>">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco" value="<?php echo e($cliente->endereco); ?>">
     <label for="">Débito</label>
     <input type="text" name="debito" id="debito" value="<?php echo e($cliente->debito); ?>">
      <input type="submit" value="Alterar">
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/clientes/edit.blade.php ENDPATH**/ ?>