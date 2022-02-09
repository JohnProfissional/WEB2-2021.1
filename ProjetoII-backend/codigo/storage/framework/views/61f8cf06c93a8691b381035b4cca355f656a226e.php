<?php $__env->startSection('titulo', 'Cadastro de Categorias'); ?>

<?php $__env->startSection('conteudo'); ?>    
    <div id="form">   

    <form action="<?php echo e(route('categorias.store')); ?>" method="post">
        <?php echo csrf_field(); ?> 

        <label for=""><h3>Cadastrar Categoria</h3></label><br><br>

    <div class="form-group">

     <label for="">Nome da Categoria</label>
     <input type="text" class=" <?php $__errorArgs = ['nomecategoria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nomecategoria" id="nomecategoria"><br><br>
     <?php $__errorArgs = ['nomecategoria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback">
            <?php echo e($message); ?>

        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/sistemadevendas/resources/views/categorias/create.blade.php ENDPATH**/ ?>