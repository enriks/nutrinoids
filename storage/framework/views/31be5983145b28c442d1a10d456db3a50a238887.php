

<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    <h1>Cuestionario de registro de 3 días</h1>
                </div>
                <div class= "panel-body">
                    <?php echo Form::open(['route'=>'registros.store']); ?>

                    <?php echo e(Form::hidden('user_id',auth()->user()->id)); ?>

                    <?php echo $__env->make('admin.registros.trozos.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
                    <?php echo Form::close(); ?>


                </div>
            </div>
        </div>  
    </div> 
</div>
 
<?php $__env->stopSection(); ?>
               
            
 

 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>