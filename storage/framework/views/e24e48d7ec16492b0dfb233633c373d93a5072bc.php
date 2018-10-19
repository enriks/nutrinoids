<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>Nombre</strong> <?php echo e($cuestionario->nombreCuestionario); ?> </p>
                   <p><strong>Archivo</strong> <?php echo e($cuestionario->archivo); ?> </p>
                   <p><strong>Creado</strong> <?php echo e($cuestionario->created_at); ?> </p>
                   <p><strong>Modificado</strong><?php echo e($cuestionario->updated_at); ?> </p>
                  
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>