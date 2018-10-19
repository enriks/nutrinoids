<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong><?php echo e($dieta->id); ?></p>
                    <p><strong>Sujeto de Investigación</strong><?php echo e($dieta->user_id); ?></p>
                    <p><strong>Frecuencia</strong><?php echo e($dieta->frecuencia); ?></p>
                    <p><strong>Adherencia</strong><?php echo e($dieta->adherencia); ?></p>
                    
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>