<?php $__env->startSection('titulo', 'Edição de Fornecedores'); ?>

<?php $__env->startSection('conteudo'); ?>
    
    <div id="form"> 
    
<form action="<?php echo e(route('fornecedores.update', ['id' => $fornecedor->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Nome do fornecedor</label>
     <input type="text" name="nomefornecedor" id="nomefornecedor" value="<?php echo e($fornecedor->nomefornecedor); ?>">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco" value="<?php echo e($fornecedor->endereco); ?>">
     <label for="">Email</label>
     <input type="text" name="email" id="email" value="<?php echo e($fornecedor->email); ?>">
      <input type="submit" value="Alterar">
    </form>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/fornecedores/edit.blade.php ENDPATH**/ ?>