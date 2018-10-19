<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Respuestas de cuestionario x
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong> <?php echo e($Legumbre->id); ?></p>
                    <p><strong>lentejas</strong> <?php echo e($Legumbre->lentejas); ?></p>
                    <p><strong>alubias</strong> <?php echo e($Legumbre->alubias); ?></p>
                    <p><strong>garbanzos</strong> <?php echo e($Legumbre->garbanzos); ?></p>
                    <p><strong>guisantes</strong> <?php echo e($Legumbre->guisantes); ?></p>
                    <p><strong>panBlanco</strong> <?php echo e($Legumbre->panBlanco); ?></p>
                    <p><strong>panNegro</strong> <?php echo e($Legumbre->panNegro); ?></p>
                    <p><strong>cerealesDesayuno</strong> <?php echo e($Legumbre->cerealesDesayuno); ?></p>
                    <p><strong>cerealesIntegrales</strong> <?php echo e($Legumbre->cerealesIntegrales); ?></p>
                    <p><strong>arrozBlanco</strong> <?php echo e($Legumbre->arrozBlanco); ?></p>
                    <p><strong>pasta</strong> <?php echo e($Legumbre->pasta); ?></p>
                    <p><strong>pizza</strong> <?php echo e($Legumbre->pizza); ?></p>
                  <a id="cancelar" href="<?php echo e(route('legumbres.index',$Legumbre->id)); ?>" class="btn btn-danger">Volver</a>
                </div>
            </div>
        </div>  
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>