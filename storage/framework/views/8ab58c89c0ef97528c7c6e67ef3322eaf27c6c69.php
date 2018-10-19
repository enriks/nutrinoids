<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong><?php echo e($Aceite->id); ?></p>
                    <p><strong>aceiteOliva</strong><?php echo e($Aceite->aceiteOliva); ?></p>
                    <p><strong>aceiteOlivaVirgen</strong><?php echo e($Aceite->aceiteOlivaVirgen); ?></p>
                    <p><strong>aceiteMaiz</strong><?php echo e($Aceite->aceiteMaiz); ?></p>
                    <p><strong>aceiteGirasol</strong><?php echo e($Aceite->aceiteGirasol); ?></p>
                    <p><strong>aceiteSoja</strong><?php echo e($Aceite->aceiteSoja); ?></p>
                    <p><strong>mezclaAnteriores</strong><?php echo e($Aceite->mezclaAnteriores); ?></p>
                    <p><strong>margarina</strong><?php echo e($Aceite->margarina); ?></p>
                    <p><strong>mantequilla</strong><?php echo e($Aceite->mantequilla); ?></p>
                    <p><strong>mantecaCerdo</strong><?php echo e($Aceite->mantecaCerdo); ?></p>
                    <a id="cancelar" href="<?php echo e(route('aceites.index',$Aceite->id)); ?>" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>