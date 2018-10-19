<?php $__env->startSection('content'); ?>

                 Ingresar Sujeto
                 <?php echo Form::open(['route'=>'cuestionario.store','files'=> true]); ?>

                    <?php echo $__env->make('cuestionario.sujeto.forms.form_nuevo_sujeto', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
                    <?php echo Form::close(); ?>

 
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>