<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Lacteo
                </div>
                <div class= "panel-body">
                    <?php echo Form::model($Lacteo,['route'=>['lacteos.update',$Lacteo->id],
                    'method' =>'PUT']); ?>

                       <?php echo $__env->make('admin.lacteos.trozos.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
                    <?php echo Form::close(); ?>


                </div>
            </div>
        </div>  
    </div>
   
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>