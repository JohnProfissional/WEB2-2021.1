<?php $__env->startSection('titulo', 'Edição de produtos'); ?>

<?php $__env->startSection('conteudo'); ?>
    
    <div id="form">     
<form action="<?php echo e(route('produtos.update', ['id' => $produto->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Nome do produto</label>
     <input type="text" name="nomeproduto" id="nomeproduto" value="<?php echo e($produto->nomeproduto); ?>">
     <label for="">Quantidade</label>
     <input type="text" name="quantidade" id="quantidade" value="<?php echo e($produto->quantidade); ?>">
     <label for="">Data de vencimento</label>
     <input type="text" name="datavencimento" id="datavencimento" value="<?php echo e($produto->datavencimento); ?>">
      <input type="submit" value="Alterar">
    </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/produtos/edit.blade.php ENDPATH**/ ?>