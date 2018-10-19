<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   

                   <p><strong>ID</strong><?php echo e($comedor->id); ?></p>
                    <p><strong>pg1</strong><?php echo e($comedor->pg1); ?></p>
                    <p><strong>pg2</strong><?php echo e($comedor->pg2); ?></p>
                    <p><strong>pg3</strong><?php echo e($comedor->pg3); ?></p>
                    <p><strong>pg4</strong><?php echo e($comedor->pg4); ?></p>
                    <p><strong>pg5</strong><?php echo e($comedor->pg5); ?></p>
                    <p><strong>pg6</strong><?php echo e($comedor->pg6); ?></p>
                    <p><strong>pg7</strong><?php echo e($comedor->pg7); ?></p>
                    <p><strong>pg8</strong><?php echo e($comedor->pg8); ?></p>
                    <p><strong>pg9</strong><?php echo e($comedor->pg9); ?></p>
                    <p><strong>pg10</strong><?php echo e($comedor->pg10); ?></p>
                    <p><strong>total</strong><?php echo e($comedor->total); ?></p>

                  <a id="cancelar" href="<?php echo e(route('comedors.index',$comedor->id)); ?>" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>