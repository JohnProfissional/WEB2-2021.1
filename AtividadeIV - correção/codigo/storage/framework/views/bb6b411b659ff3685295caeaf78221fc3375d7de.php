<h1>Página de consulta de fornecedores</h1>


<?php $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do fornecedor: <?php echo e($fornecedor->nome); ?></li>
    <li>Endereco do fornecedor: <?php echo e($fornecedor->endereco); ?></li>
    <li>Email do fornecedor: <?php echo e($fornecedor->email); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php /**PATH /var/www/projeto2/resources/views/fornecedores/show.blade.php ENDPATH**/ ?>