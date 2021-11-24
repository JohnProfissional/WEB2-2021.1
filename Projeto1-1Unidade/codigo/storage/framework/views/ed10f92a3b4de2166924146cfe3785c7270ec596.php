<?php $__env->startSection('titulo', 'Página de fornecedores'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<label for=""><h1>Página de Fornecedores</h1></label><br>
<?php $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do fornecedor: <?php echo e($fornecedor->nomefornecedor); ?></li>
    <li>Endereco do fornecedor: <?php echo e($fornecedor->endereco); ?></li>
    <li>Email do fornecedor: <?php echo e($fornecedor->email); ?></li>
    <li> <a href="edit/<?php echo e($fornecedor->id); ?>">Editar fornecedor</a></li>

    <form action="<?php echo e(route ('fornecedores.delete',  ['id' => $fornecedor->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar">

    </form>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/fornecedores/indexs.blade.php ENDPATH**/ ?>