<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Datos
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong><?php echo e($dantropometrico->id); ?></p>
                    <p><strong>Sujeto</strong><?php echo e($dantropometrico->user_id); ?></p>
                    <p><strong>Peso</strong><?php echo e($dantropometrico->peso); ?></p>
                    <p><strong>Talla</strong><?php echo e($dantropometrico->talla); ?></p>
                    <p><strong>IMC</strong><?php echo e($dantropometrico->imc); ?></p>
                    <p><strong>metBasal</strong><?php echo e($dantropometrico->metBasal); ?></p>
                    <p><strong>masaGrasa</strong><?php echo e($dantropometrico->masaGrasa); ?></p>
                    <p><strong>masaLibre</strong><?php echo e($dantropometrico->masaLibre); ?></p>
                    <p><strong>masaMusculo</strong><?php echo e($dantropometrico->masaMusculo); ?></p>
                    <p><strong>masaOsea</strong><?php echo e($dantropometrico->masaOsea); ?></p>
                    <p><strong>agua</strong><?php echo e($dantropometrico->agua); ?></p>
                   
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>