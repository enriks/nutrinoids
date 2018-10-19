<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong><?php echo e($hucape->id); ?></p>
                    <p><strong>huevosGallina</strong><?php echo e($hucape->huevosGallina); ?></p>
                    <p><strong>aveConPiel</strong><?php echo e($hucape->aveConPiel); ?></p>
                    <p><strong>aveSinPiel</strong><?php echo e($hucape->aveSinPiel); ?></p>
                    <p><strong>carneTernera</strong><?php echo e($hucape->carneTernera); ?></p>
                    <p><strong>carneCerdo</strong><?php echo e($hucape->carneCerdo); ?></p>
                    <p><strong>carneCordero</strong><?php echo e($hucape->carneCordero); ?></p>
                    <p><strong>conejo</strong><?php echo e($hucape->conejo); ?></p>
                    <p><strong>higado</strong><?php echo e($hucape->higado); ?></p>
                    <p><strong>otrasViceras</strong><?php echo e($hucape->otrasViceras); ?></p>
                    <p><strong>jamonSerrano</strong><?php echo e($hucape->jamonSerrano); ?></p>
                    <p><strong>jamonLoncha</strong><?php echo e($hucape->jamonLoncha); ?></p>
                    <p><strong>carnesProcesadas</strong><?php echo e($hucape->carnesProcesadas); ?></p>
                    <p><strong>pates</strong><?php echo e($hucape->pates); ?></p>
                    <p><strong>hamburguesa</strong><?php echo e($hucape->hamburguesa); ?></p>
                    <p><strong>tocino</strong><?php echo e($hucape->tocino); ?></p>
                    <p><strong>pescadoBlanco</strong><?php echo e($hucape->pescadoBlanco); ?></p>
                    <p><strong>pescadoAzul</strong><?php echo e($hucape->pescadoAzul); ?></p>
                    <p><strong>pescadoSalado</strong><?php echo e($hucape->pescadoSalado); ?></p>
                    <p><strong>moluscos</strong><?php echo e($hucape->moluscos); ?></p>
                    <p><strong>moluscosCefalopodos</strong><?php echo e($hucape->moluscosCefalopodos); ?></p>
                    <p><strong>crustaceos</strong><?php echo e($hucape->crustaceos); ?></p>
                    <p><strong>mariscosEnlatados</strong><?php echo e($hucape->mariscosEnlatados); ?></p>
                    <p><strong>mariscosAceite</strong><?php echo e($hucape->mariscosAceite); ?></p>

                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>