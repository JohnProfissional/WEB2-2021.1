<h1>Página de clientes</h1>


<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do cliente: <?php echo e($cliente->nome); ?></li>
    <li>Endereco do cliente: <?php echo e($cliente->endereco); ?></li>
    <li>debito do cliente: <?php echo e($cliente->debito); ?></li>
    <li> <a href="edit/<?php echo e($cliente->id); ?>">Editar cliente</a></li>

    <form action="../clientes/<?php echo e($cliente->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar">

    </form>

</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php /**PATH /var/www/projeto2/resources/views/clientes/index.blade.php ENDPATH**/ ?>