<?php $__env->startSection('content'); ?>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de bollerias
                    <a href="<?php echo e(route('bollerias.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Sujeto</th>
                    <th>galletasMaria</th>
                    <th>galletasIntegrales</th>
                    <th>galletasChocolate</th>
                    <th>reposteria</th>
                    <th>croissant</th>
                    <th>donuts</th>
                    <th>magdalenas</th>
                    <th>pasteles</th>
                    <th>churros</th>
                    <th>chocolates</th>
                    <th>cacaoPolvo</th>
                    <th>turron</th>
                    <th>matecados</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Bollerias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bolleria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($bolleria->id); ?></td>
                    <td><?php echo e($bolleria->user_id); ?></td>
                    <td><?php echo e($bolleria->galletasMaria); ?></td>
                    <td><?php echo e($bolleria->galletasIntegrales); ?></td>
                    <td><?php echo e($bolleria->galletasChocolate); ?></td>
                    <td><?php echo e($bolleria->reposteria); ?></td>
                    <td><?php echo e($bolleria->croissant); ?></td>
                    <td><?php echo e($bolleria->donuts); ?></td>
                    <td><?php echo e($bolleria->magdalenas); ?></td>
                    <td><?php echo e($bolleria->pasteles); ?></td>
                    <td><?php echo e($bolleria->churros); ?></td>
                    <td><?php echo e($bolleria->chocolates); ?></td>
                    <td><?php echo e($bolleria->cacaoPolvo); ?></td>
                    <td><?php echo e($bolleria->turron); ?></td>
                    <td><?php echo e($bolleria->matecados); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('bollerias.show',$bolleria->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('bollerias.edit',$bolleria->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['bollerias.destroy',$bolleria->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <?php echo e($Bollerias->render()); ?>

                </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>