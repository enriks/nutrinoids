<?php $__env->startSection('content'); ?>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Legumbres
                    <a href="<?php echo e(route('legumbres.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Sujeto</th>
                    <th>lentejas</th>
                    <th>alubias</th>
                    <th>garbanzos</th>
                    <th>guisantes</th>
                    <th>panBlanco</th>
                    <th>panNegro</th>
                    <th>cerealesDesayuno</th>
                    <th>cerealesIntegrales</th>
                    <th>arrozBlanco</th>
                    <th>pasta</th>
                    <th>pizza</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Legumbres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $legumbre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($legumbre->id); ?></td>
                    <td><?php echo e($legumbre->user_id); ?></td>
                    <td><?php echo e($legumbre->lentejas); ?></td>
                    <td><?php echo e($legumbre->alubias); ?></td>
                    <td><?php echo e($legumbre->garbanzos); ?></td>
                    <td><?php echo e($legumbre->guisantes); ?></td>
                    <td><?php echo e($legumbre->panBlanco); ?></td>
                    <td><?php echo e($legumbre->panNegro); ?></td>
                    <td><?php echo e($legumbre->cerealesDesayuno); ?></td>
                    <td><?php echo e($legumbre->cerealesIntegrales); ?></td>
                    <td><?php echo e($legumbre->arrozBlanco); ?></td>
                    <td><?php echo e($legumbre->pasta); ?></td>
                    <td><?php echo e($legumbre->pizza); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('legumbres.show',$Legumbre->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('legumbres.edit',$Legumbre->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['legumbres.destroy',$Legumbre->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <?php echo e($Legumbres->render()); ?>

                </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>