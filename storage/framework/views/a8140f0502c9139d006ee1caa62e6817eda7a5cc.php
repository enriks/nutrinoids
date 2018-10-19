<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver sujeto
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>Nombre</strong> <?php echo e($sujeto->nombre); ?> </p>
                   <p><strong>Archivo</strong> <?php echo e($sujeto->apellidos); ?> </p>
                   <p><strong>Email</strong> <?php echo e($sujeto->email); ?> </p>
                   <p><strong>Fecha Nacimiento</strong> <?php echo e($sujeto->fechaNac); ?> </p>
                   <p><strong>Código</strong> <?php echo e($sujeto->codigo); ?> </p>
                   <p><strong>Imagen</strong> <?php echo e($sujeto->imagenurl); ?> </p>
                   <p><strong>Fecha Nacimiento</strong> <?php echo e($sujeto->trabaja); ?> </p>
                   <p><strong>Código</strong> <?php echo e($sujeto->sexo); ?> </p>
                   <p><strong>Imagen</strong> <?php echo e($sujeto->deportes); ?> </p>
                   <p><strong>Nacionalidad</strong> <?php echo e($sujeto->nacionalidade_id); ?> </p>
                   <p><strong>Comunidad</strong> <?php echo e($sujeto->comunidade_id); ?> </p>
                   <p><strong>Población</strong> <?php echo e($sujeto->poblacione_id); ?> </p>
                   <p><strong>Modificado</strong><?php echo e($sujeto->created_at); ?> </p>
                   <p><strong>Modificado</strong><?php echo e($sujeto->updated_at); ?> </p>
                  
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>