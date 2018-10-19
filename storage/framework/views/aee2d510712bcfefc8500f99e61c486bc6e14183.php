
<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar bolleria
                </div>
                <div class= "panel-body">
                    <?php echo Form::model($Bolleria,['route'=>['bollerias.update',$Bolleria->id],
                    'method' =>'PUT']); ?>

                      <?php echo e(Form::hidden('user_id', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'user_id'])); ?>

                       <?php echo $__env->make('admin.bollerias.trozos.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
                    <?php echo Form::close(); ?>

                    <a id="cancelar" href="<?php echo e(route('bollerias.index')); ?>" class="btn btn-danger">Cancelar</a>

                </div>
            </div>
        </div>  
    </div>
   
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>