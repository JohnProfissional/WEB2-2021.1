<h1>Página de fornecedores</h1>


<?php $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome do fornecedor: <?php echo e($fornecedor->nomefornecedor); ?></li>
    <li>Endereco do fornecedor: <?php echo e($fornecedor->endereco); ?></li>
    <li>Email do fornecedor: <?php echo e($fornecedor->email); ?></li>
    <li> <a href="edit/<?php echo e($fornecedor->id); ?>">Editar fornecedor</a></li>

    <form action="../fornecedores/<?php echo e($fornecedor->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar">

    </form>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

<?php /**PATH /var/www/projeto2/resources/views/fornecedores/indexs.blade.php ENDPATH**/ ?>