<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                    Ver Cuestionario

                </div>
                <div class="panel-body">

                    <p><strong>ID</strong><?php echo e($Lacteo->id); ?></p>
                    <p><strong>lecheEnt</strong><?php echo e($Lacteo->lecheEnt); ?></p>
                    <p><strong>lecheSemi</strong><?php echo e($Lacteo->lecheSemi); ?></p>
                    <p><strong>lecheDesc</strong><?php echo e($Lacteo->lecheDesc); ?></p>
                    <p><strong>lecheCond</strong><?php echo e($Lacteo->lecheCond); ?></p>
                    <p><strong>nata</strong><?php echo e($Lacteo->nata); ?></p>
                    <p><strong>batidoLeche</strong><?php echo e($Lacteo->batidoLeche); ?></p>
                    <p><strong>yogurtEnt</strong><?php echo e($Lacteo->yogurtEnt); ?></p>
                    <p><strong>yogurtDesc</strong><?php echo e($Lacteo->yogurtDesc); ?></p>
                    <p><strong>petit</strong><?php echo e($Lacteo->petit); ?></p>
                    <p><strong>requeson</strong><?php echo e($Lacteo->requeson); ?></p>
                    <p><strong>quesoPorciones</strong><?php echo e($Lacteo->quesoPorciones); ?></p>
                    <p><strong>otrosQuesos</strong><?php echo e($Lacteo->otrosQuesos); ?></p>
                    <p><strong>quesoBlanco</strong><?php echo e($Lacteo->quesoBlanco); ?></p>
                    <p><strong>natillas</strong><?php echo e($Lacteo->natillas); ?></p>
                    <p><strong>helados</strong><?php echo e($Lacteo->helados); ?></p>
                    <a id="cancelar" href="<?php echo e(route('lacteos.index',$Lacteo->id)); ?>" class="btn btn-danger">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>