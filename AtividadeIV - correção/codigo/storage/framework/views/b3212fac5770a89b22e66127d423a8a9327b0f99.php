<h1>Página de consulta de endereços</h1>


<?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Logradouro: <?php echo e($endereco->logradouro); ?></li>
    <li>Bairro: <?php echo e($endereco->bairro); ?></li>
    <li>Cidade: <?php echo e($endereco->cidade); ?></li>
    <li>UF: <?php echo e($endereco->uf); ?></li>
    <li>ID cliente: <?php echo e($endereco->cliente_id); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php /**PATH /var/www/projeto2/resources/views/enderecos/show.blade.php ENDPATH**/ ?>