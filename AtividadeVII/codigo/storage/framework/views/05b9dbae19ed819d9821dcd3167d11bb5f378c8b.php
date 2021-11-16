<?php $__env->startSection('titulo', 'Edição de itens vendas'); ?>

<?php $__env->startSection('conteudo'); ?>
    
    <div id="form">     
<form action="<?php echo e(route('itensvenda.update', ['id' => $itensvenda->id])); ?>" method="post">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
     <label for="">Quantidade de itens</label>
     <input type="text" name="quantidadeitens" id="quantidadeitens" value="<?php echo e($itensvenda->quantidadeitens); ?>">
     <label for="">Valor</label>
     <input type="text" name="valor" id="valor" value="<?php echo e($itensvenda->valor); ?>">
     <label for="">Desconto</label>
     <input type="text" name="desconto" id="desconto" value="<?php echo e($itensvenda->desconto); ?>">
     <label for=""> ID da venda</label>
     <input type="text" name="venda_id" id="venda_id">
     <label for="">ID do produto</label>
     <input type="text" name="produto_id" id="produto_id">
      <input type="submit" value="Alterar">
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/itensvendas/edit.blade.php ENDPATH**/ ?>