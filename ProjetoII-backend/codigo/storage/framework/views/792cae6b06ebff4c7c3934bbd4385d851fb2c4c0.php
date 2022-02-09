<?php $__env->startSection('titulo', 'Página de clientes'); ?>

<?php $__env->startSection('conteudo'); ?>

<div id="form">

<label for=""><h1>Página de clientes</h1></label><br>
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<ul>    
    <li>Nome do cliente: <?php echo e($cliente->nomecliente); ?></li>
    <li>CPF do Cliente: <?php echo e($cliente->cpfcliente); ?></li>
    <li>RG do Cliente: <?php echo e($cliente->rgcliente); ?></li>
    <li>Sexo do Cliente: <?php echo e($cliente->sexocliente); ?></li>
    <li>Data de nascimento: <?php echo e($cliente->datanascimento); ?></li>
    <li>Débito: <?php echo e($cliente->debito); ?></li>
    <li> <a href="<?php echo e(route ('clientes.edit', ['id' => $cliente->id])); ?>">Editar Cliente</a></li><br>

    <form action="<?php echo e(route ('clientes.delete',  ['id' => $cliente->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/sistemadevendas/resources/views/clientes/index.blade.php ENDPATH**/ ?>