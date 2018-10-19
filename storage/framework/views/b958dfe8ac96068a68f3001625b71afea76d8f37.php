<?php $__env->startSection('content'); ?>
  <head>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  </head>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de lacteos
                    <a href="<?php echo e(route('lacteos.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                </div>
            
            <div class= "panel-body">
                   <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                   <?php $__currentLoopData = $Lacteos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lacteo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option data-subtext="<?php echo e($lacteo->codigo); ?>"><?php echo e($lacteo->name); ?> <?php echo e($lacteo->lastname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                   
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Codigo</th>
                    <th>lecheEnt</th>
                    <th>lecheSemi</th>
                    <th>lecheDesc</th>
                    <th>lecheCond</th>
                    <th>nata</th>
                    <th>batidoLeche</th>
                    <th>yogurtEnt</th>
                    <th>yogurtDesc</th>
                    <th>petit</th>
                    <th>requeson</th>
                    <th>quesoPorciones</th>
                    <th>otrosQuesos</th>
                    <th>quesoBlanco</th>
                    <th>natillas</th>
                    <th>helados</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Lacteos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lacteo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($lacteo->id); ?></td>
                    <td><?php echo e($lacteo->name); ?></td>
                    <td><?php echo e($lacteo->lastname); ?></td>
                    <td><?php echo e($lacteo->codigo); ?></td>
                    <td><?php echo e($lacteo->lecheEnt); ?></td>
                    <td><?php echo e($lacteo->lecheSemi); ?></td>
                    <td><?php echo e($lacteo->lecheDesc); ?></td>
                    <td><?php echo e($lacteo->lecheCond); ?></td>
                    <td><?php echo e($lacteo->nata); ?></td>
                    <td><?php echo e($lacteo->batidoLeche); ?></td>
                    <td><?php echo e($lacteo->yogurtEnt); ?></td>
                    <td><?php echo e($lacteo->yogurtDesc); ?></td>
                    <td><?php echo e($lacteo->petit); ?></td>
                    <td><?php echo e($lacteo->requeson); ?></td>
                    <td><?php echo e($lacteo->quesoPorciones); ?></td>
                    <td><?php echo e($lacteo->otrosQuesos); ?></td>
                    <td><?php echo e($lacteo->quesoBlanco); ?></td>
                    <td><?php echo e($lacteo->natillas); ?></td>
                    <td><?php echo e($lacteo->helados); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('lacteos.show',$lacteo->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('lacteos.edit',$lacteo->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['lacteos.destroy',$lacteo->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>