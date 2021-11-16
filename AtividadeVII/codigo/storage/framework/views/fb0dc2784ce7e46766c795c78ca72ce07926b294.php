<?php $__env->startSection('titulo','Consulta de clientes'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">
<h1>Página de consulta de clientes</h1>
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do cliente: <?php echo e($cliente->nome); ?></li>
    <li>Endereco do cliente: <?php echo e($cliente->endereco); ?></li>
    <li>debito do cliente: <?php echo e($cliente->debito); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projeto2/resources/views/clientes/show.blade.php ENDPATH**/ ?>