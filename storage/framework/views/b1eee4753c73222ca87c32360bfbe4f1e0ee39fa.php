<?php $__env->startSection('content'); ?>
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de registros
                    <a href="<?php echo e(route('registros.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                </div>
            <div class= "panel-body table-responsive">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Sujeto</th>
                    <th>fecha</th>
                    <th>desAlimento</th>
                    <th>desBebida</th>
                    <th>desHora</th>
                    <th>desLugar</th>
                    <th>memaAlimento</th>
                    <th>memaBebida</th>
                    <th>memaHora</th>
                    <th>memaLugar</th>
                    <th>comAlimento</th>
                    <th>comBebida</th>
                    <th>comHora</th>
                    <th>comLugar</th>
                    <th>meriAlimento</th>
                    <th>meriBebida</th>
                    <th>meriHora</th>
                    <th>meriLugar</th>
                    <th>cenAlimento</th>
                    <th>cenBebida</th>
                    <th>cenHora</th>
                    <th>cenLugar</th>
                    <th>picAlimento</th>
                    <th>picBebida</th>
                    <th>picHora</th>
                    <th>picLugar</th>
                    

                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($registro->id); ?></td>
                    <td><?php echo e($registro->user_id); ?></td>
                    <td><?php echo e($registro->fecha); ?></td>
                    <td><?php echo e($registro->desAlimento); ?></td>
                    <td><?php echo e($registro->desBebida); ?></td>
                    <td><?php echo e($registro->desHora); ?></td>
                    <td><?php echo e($registro->desLugar); ?></td>
                    <td><?php echo e($registro->memaAlimento); ?></td>
                    <td><?php echo e($registro->memaBebida); ?></td>
                    <td><?php echo e($registro->memaHora); ?></td>
                    <td><?php echo e($registro->memaLugar); ?></td>
                    <td><?php echo e($registro->comAlimento); ?></td>
                    <td><?php echo e($registro->comBebida); ?></td>
                    <td><?php echo e($registro->comHora); ?></td>
                    <td><?php echo e($registro->comLugar); ?></td>
                    <td><?php echo e($registro->meriAlimento); ?></td>
                    <td><?php echo e($registro->meriBebida); ?></td>
                    <td><?php echo e($registro->meriHora); ?></td>
                    <td><?php echo e($registro->meriLugar); ?></td>
                    <td><?php echo e($registro->cenAlimento); ?></td>
                    <td><?php echo e($registro->cenBebida); ?></td>
                    <td><?php echo e($registro->cenHora); ?></td>
                    <td><?php echo e($registro->cenLugar); ?></td>
                    <td><?php echo e($registro->picAlimento); ?></td>
                    <td><?php echo e($registro->picBebida); ?></td>
                    <td><?php echo e($registro->picHora); ?></td>
                    <td><?php echo e($registro->picLugar); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('registros.show',$registro->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('registros.edit',$registro->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['registros.destroy',$registro->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <?php echo e($registros->render()); ?>

                </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>