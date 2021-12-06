<?php $__env->startSection('titulo', 'Consulta de fornecedores'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<label for=""><h1>Página de consulta de fornecedores</h1></label><br>

<?php $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do fornecedor: <?php echo e($fornecedor->nomefornecedor); ?></li>
    <li>Endereco do fornecedor: <?php echo e($fornecedor->endereco); ?></li>
    <li>Email do fornecedor: <?php echo e($fornecedor->email); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/fornecedores/show.blade.php ENDPATH**/ ?>