
<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   

                   <p><strong>ID</strong><?php echo e($registro->id); ?></p>
                    <p><strong>fecha</strong><?php echo e($registro->fecha); ?></p>
                    <p><strong>desAlimento</strong><?php echo e($registro->desAlimento); ?></p>
                    <p><strong>desBebida</strong><?php echo e($registro->desBebida); ?></p>
                    <p><strong>desHora</strong><?php echo e($registro->desHora); ?></p>
                    <p><strong>desLugar</strong><?php echo e($registro->desLugar); ?></p>
                    <p><strong>memaAlimento</strong><?php echo e($registro->memaAlimento); ?></p>
                    <p><strong>memaBebida</strong><?php echo e($registro->memaBebida); ?></p>
                    <p><strong>memaHora</strong><?php echo e($registro->memaHora); ?></p>
                    <p><strong>memaLugar</strong><?php echo e($registro->memaLugar); ?></p>
                    <p><strong>comAlimento</strong><?php echo e($registro->comAlimento); ?></p>
                    <p><strong>comBebida</strong><?php echo e($registro->comBebida); ?></p>
                    <p><strong>comHora</strong><?php echo e($registro->comHora); ?></p>
                    <p><strong>comLugar</strong><?php echo e($registro->comLugar); ?></p>
                    <p><strong>meriAlimento</strong><?php echo e($registro->meriAlimento); ?></p>
                    <p><strong>meriBebida</strong><?php echo e($registro->meriBebida); ?></p>
                    <p><strong>meriHora</strong><?php echo e($registro->meriHora); ?></p>
                    <p><strong>meriLugar</strong><?php echo e($registro->meriLugar); ?></p>
                    <p><strong>cenAlimento</strong><?php echo e($registro->cenAlimento); ?></p>
                    <p><strong>cenBebida</strong><?php echo e($registro->cenBebida); ?></p>
                    <p><strong>cenHora</strong><?php echo e($registro->cenHora); ?></p>
                    <p><strong>cenLugar</strong><?php echo e($registro->cenLugar); ?></p>
                    <p><strong>picAlimento</strong><?php echo e($registro->picAlimento); ?></p>
                    <p><strong>picBebida</strong><?php echo e($registro->picBebida); ?></p>
                    <p><strong>picHora</strong><?php echo e($registro->picHora); ?></p>
                    <p><strong>picLugar</strong><?php echo e($registro->picLugar); ?></p>
                    <a id="cancelar" href="<?php echo e(route('registros.index',$registro->id)); ?>" class="btn btn-danger">Cancelar</a>
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>