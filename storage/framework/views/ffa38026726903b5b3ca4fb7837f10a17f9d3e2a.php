
<?php $__env->startSection('content'); ?>
   <div class="row justify-content-md-center">
       <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                 <div class="row align-items-end">
                <div class="col col-offset-4">
                    <div class="card">
                        <div class="card-header">
                            Cuestionario de frecuencia de consumno: miscelaneas
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Seleccione sujeto:</h5>
                       <select id="select" name="comedors" class="selectpicker col-md-8" data-show-subtext="true" data-live-search="true">
                       <?php $__currentLoopData = $comedors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option data-subtext="<?php echo e($comedor->codigo); ?>" value="<?php echo e($comedor->id); ?>"><?php echo e($comedor->name); ?> <?php echo e($comedor->lastname); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <a  id="editar" href="" class="btn btn-warning">Editar</a>
                       <a id="cancelar" href="<?php echo e(route('indices.index')); ?>" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                    <div class="panel-body">


                    </div>
                </div>
            </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>