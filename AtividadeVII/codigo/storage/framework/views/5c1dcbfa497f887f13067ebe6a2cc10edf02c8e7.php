<h1>Página de consulta de entradas</h1>

<?php $__currentLoopData = $entradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Valor total da nota: <?php echo e($entrada->valortotaldanota); ?></li>
    <li>Data da entrada: <?php echo e($entrada->dataentrada); ?></li>
    
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php /**PATH /var/www/projeto2/resources/views/entradas/show.blade.php ENDPATH**/ ?>