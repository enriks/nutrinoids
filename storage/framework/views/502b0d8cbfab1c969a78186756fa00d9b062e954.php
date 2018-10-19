<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                    Ver Cuestionario

                </div>
                <div class="panel-body">

                    <p><strong>ID</strong><?php echo e($Miscelanea->id); ?></p>
                    <p><strong>croquetas</strong><?php echo e($Miscelanea->croquetas); ?></p>
                    <p><strong>sopas</strong><?php echo e($Miscelanea->sopas); ?></p>
                    <p><strong>mostaza</strong><?php echo e($Miscelanea->mostaza); ?></p>
                    <p><strong>mayonesa</strong><?php echo e($Miscelanea->mayonesa); ?></p>
                    <p><strong>salsaTomate</strong><?php echo e($Miscelanea->salsaTomate); ?></p>
                    <p><strong>picante</strong><?php echo e($Miscelanea->picante); ?></p>
                    <p><strong>sal</strong><?php echo e($Miscelanea->sal); ?></p>
                    <p><strong>mermeladas</strong><?php echo e($Miscelanea->mermeladas); ?></p>
                    <p><strong>azucar</strong><?php echo e($Miscelanea->azucar); ?></p>
                    <p><strong>miel</strong><?php echo e($Miscelanea->miel); ?></p>
                    <p><strong>snacks</strong><?php echo e($Miscelanea->snacks); ?></p>
                    <p><strong>otro</strong><?php echo e($Miscelanea->otro); ?></p>
                    <a id="cancelar" href="<?php echo e(route('miscelaneas.index',$Miscelanea->id)); ?>" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>