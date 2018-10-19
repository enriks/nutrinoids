<?php $__env->startSection('content'); ?>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de bebidas
                    <a href="<?php echo e(route('bebidas.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Sujeto</th>
                    <th>bebidasCabonatadasAzucar</th>
                    <th>bebidasCarbonatadasBajasCalorias</th>
                    <th>zumoNaranja</th>
                    <th>zumoOtrasFrutas</th>
                    <th>cafeDesc</th>
                    <th>cafe</th>
                    <th>te</th>
                    <th>mosto</th>
                    <th>vinoRosado</th>
                    <th>vinoMoscatel</th>
                    <th>vinoTintoJoven</th>
                    <th>vinoTintoAñejo</th>
                    <th>vinoBlanco</th>
                    <th>cerveza</th>
                    <th>licores</th>
                    <th>destilados</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Bebidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bebida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($Bebida->id); ?></td>
                    <td><?php echo e($Bebida->user_id); ?></td>
                    <td><?php echo e($Bebida->bebidasCabonatadasAzucar); ?></td>
                    <td><?php echo e($Bebida->bebidasCarbonatadasBajasCalorias); ?></td>
                    <td><?php echo e($Bebida->zumoNaranja); ?></td>
                    <td><?php echo e($Bebida->zumoOtrasFrutas); ?></td>
                    <td><?php echo e($Bebida->cafeDesc); ?></td>
                    <td><?php echo e($Bebida->cafe); ?></td>
                    <td><?php echo e($Bebida->te); ?></td>
                    <td><?php echo e($Bebida->mosto); ?></td>
                    <td><?php echo e($Bebida->vinoRosado); ?></td>
                    <td><?php echo e($Bebida->vinoMoscatel); ?></td>
                    <td><?php echo e($Bebida->vinoTintoJoven); ?></td>
                    <td><?php echo e($Bebida->vinoTintoAñejo); ?></td>
                    <td><?php echo e($Bebida->vinoBlanco); ?></td>
                    <td><?php echo e($Bebida->cerveza); ?></td>
                    <td><?php echo e($Bebida->licores); ?></td>
                    <td><?php echo e($Bebida->destilados); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('bebidas.show',$Bebida->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('bebidas.edit',$Bebida->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['bebidas.destroy',$Bebida->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <?php echo e($Bebidas->render()); ?>

                </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>