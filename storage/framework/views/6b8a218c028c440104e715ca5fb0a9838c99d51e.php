<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar registro
                </div>
                <div class="panel-body">
                    <?php echo Form::model($registro,['route'=>['registros.update',$registro->id],
                    'method' =>'PUT']); ?>

                    <?php echo $__env->make('admin.registros.trozos.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::close(); ?>

                    <a id="cancelar" href="<?php echo e(route('registros.index',$registro->id)); ?>" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>