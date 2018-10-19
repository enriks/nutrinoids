<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong><?php echo e($lacteo->id); ?></p>
                    <p><strong>lecheEnt</strong><?php echo e($lacteo->lecheEnt); ?></p>
                    <p><strong>lecheSemi</strong><?php echo e($lacteo->lecheSemi); ?></p>
                    <p><strong>lecheDesc</strong><?php echo e($lacteo->lecheDesc); ?></p>
                    <p><strong>lecheCond</strong><?php echo e($lacteo->lecheCond); ?></p>
                    <p><strong>nata</strong><?php echo e($lacteo->nata); ?></p>
                    <p><strong>batidoLeche</strong><?php echo e($lacteo->batidoLeche); ?></p>
                    <p><strong>yogurtEnt</strong><?php echo e($lacteo->yogurtEnt); ?></p>
                    <p><strong>yogurtDesc</strong><?php echo e($lacteo->yogurtDesc); ?></p>
                    <p><strong>petit</strong><?php echo e($lacteo->petit); ?></p>
                    <p><strong>requeson</strong><?php echo e($lacteo->requeson); ?></p>
                    <p><strong>quesoPorciones</strong><?php echo e($lacteo->quesoPorciones); ?></p>
                    <p><strong>otrosQuesos</strong><?php echo e($lacteo->otrosQuesos); ?></p>
                    <p><strong>quesoBlanco</strong><?php echo e($lacteo->quesoBlanco); ?></p>
                    <p><strong>natillas</strong><?php echo e($lacteo->natillas); ?></p>
                    <p><strong>helados</strong><?php echo e($lacteo->helados); ?></p>
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>