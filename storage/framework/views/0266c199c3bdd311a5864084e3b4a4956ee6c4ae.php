<?php $__env->startSection('content'); ?>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de miscelaneas
                    <a href="<?php echo e(route('miscelaneas.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Sujeto</th>
                    <th>croquetas</th>
                    <th>sopas</th>
                    <th>mostaza</th>
                    <th>mayonesa</th>
                    <th>salsaTomate</th>
                    <th>picante</th>
                    <th>sal</th>
                    <th>mermeladas</th>
                    <th>azucar</th>
                    <th>miel</th>
                    <th>snacks</th>
                    <th>otro</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Miscelaneas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $miscelanea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($miscelanea->id); ?></td>
                    <td><?php echo e($miscelanea->user_id); ?></td>
                    <td><?php echo e($miscelanea->croquetas); ?></td>
                    <td><?php echo e($miscelanea->sopas); ?></td>
                    <td><?php echo e($miscelanea->mostaza); ?></td>
                    <td><?php echo e($miscelanea->mayonesa); ?></td>
                    <td><?php echo e($miscelanea->salsaTomate); ?></td>
                    <td><?php echo e($miscelanea->picante); ?></td>
                    <td><?php echo e($miscelanea->sal); ?></td>
                    <td><?php echo e($miscelanea->mermeladas); ?></td>
                    <td><?php echo e($miscelanea->azucar); ?></td>
                    <td><?php echo e($miscelanea->miel); ?></td>
                    <td><?php echo e($miscelanea->snacks); ?></td>
                    <td><?php echo e($miscelanea->otro); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('miscelaneas.show',$Miscelanea->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('miscelaneas.edit',$Miscelanea->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['miscelaneas.destroy',$Miscelanea->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <?php echo e($Miscelaneas->render()); ?>

                </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>