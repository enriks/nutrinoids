
<?php $__env->startSection('content'); ?>

                <div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Cuestionarios
                    <a href="<?php echo e(route('cuestionarios.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                    <a id="cancelar" href="<?php echo e(route('indices.index')); ?>" class="btn btn-danger">Cancelar</a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Nombre Cuestionario</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $cuestionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuestionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($cuestionario->id); ?></td>
                    <td><?php echo e($cuestionario->nombreCuestionario); ?></td>
                    <td><?php echo e($cuestionario->created_at); ?></td>
                    <td><?php echo e($cuestionario->updated_at); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('cuestionarios.show',$cuestionario->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('cuestionarios.edit',$cuestionario->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['cuestionarios.destroy',$cuestionario->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    </tbody>
                    </table>
                    <?php echo e($cuestionarios->render()); ?>

                </div>
            </div>   
        </div>
    </div>
</div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>