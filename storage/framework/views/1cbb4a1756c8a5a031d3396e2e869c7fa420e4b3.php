<?php $__env->startSection('content'); ?>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de aceites
                    <a href="<?php echo e(route('aceites.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Sujeto</th>
                    <th>aceiteOliva</th>
                    <th>aceiteOlivaVirgen</th>
                    <th>aceiteMaiz</th>
                    <th>aceiteGirasol</th>
                    <th>aceiteSoja</th>
                    <th>mezclaAnteriores</th>
                    <th>margarina</th>
                    <th>mantequilla</th>
                    <th>mantecaCerdo</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Aceites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aceite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($aceite->id); ?></td>
                    <td><?php echo e($aceite->user_id); ?></td>
                    <td><?php echo e($aceite->aceiteOliva); ?></td>
                    <td><?php echo e($aceite->aceiteOlivaVirgen); ?></td>
                    <td><?php echo e($aceite->aceiteMaiz); ?></td>
                    <td><?php echo e($aceite->aceiteGirasol); ?></td>
                    <td><?php echo e($aceite->aceiteSoja); ?></td>
                    <td><?php echo e($aceite->mezclaAnteriores); ?></td>
                    <td><?php echo e($aceite->margarina); ?></td>
                    <td><?php echo e($aceite->mantequilla); ?></td>
                    <td><?php echo e($aceite->mantecaCerdo); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('aceites.show',$aceite->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('aceites.edit',$aceite->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['aceites.destroy',$Aceite->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <?php echo e($Aceites->render()); ?>

                </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>