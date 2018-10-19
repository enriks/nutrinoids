<?php $__env->startSection('content'); ?>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de frutas
                    <a href="<?php echo e(route('frutas.create')); ?>" class="btn btn-sm btn-primary pull-right">  <?php echo e(__('Crear')); ?>  </a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Sujeto</th>
                    <th>naranja</th>
                    <th>platano</th>
                    <th>manzana</th><th>fresas</th>
                    <th>cerezas</th>
                    <th>melocoton</th>
                    <th>sandia</th>
                    <th>melon</th>
                    <th>kiwi</th>
                    <th>uvas</th>
                    <th>aceitunas</th>
                    <th>frutasAlmibar</th>
                    <th>datiles</th>
                    <th>almendras</th>
                    <th>nueces</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $Frutas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($fruta->id); ?></td>
                    <td><?php echo e($fruta->user_id); ?></td>
                    <td><?php echo e($fruta->naranja); ?></td>
                    <td><?php echo e($fruta->platano); ?></td>
                    <td><?php echo e($fruta->manzana); ?></td>
                    <td><?php echo e($fruta->fresas); ?></td>
                    <td><?php echo e($fruta->cerezas); ?></td>
                    <td><?php echo e($fruta->melocoton); ?></td>
                    <td><?php echo e($fruta->sandia); ?></td>
                    <td><?php echo e($fruta->melon); ?></td>
                    <td><?php echo e($fruta->kiwi); ?></td>
                    <td><?php echo e($fruta->uvas); ?></td>
                    <td><?php echo e($fruta->aceitunas); ?></td>
                    <td><?php echo e($fruta->frutasAlmibar); ?></td>
                    <td><?php echo e($fruta->datiles); ?></td>
                    <td><?php echo e($fruta->almendras); ?></td>
                    <td><?php echo e($fruta->nueces); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('frutas.show',$Fruta->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('frutas.edit',$Fruta->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['frutas.destroy',$Fruta->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <?php echo e($Frutas->render()); ?>

                </div>
            </div>   
        </div>
    </div>
 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>