<?php $__env->startSection('content'); ?>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a id="cancelar" href="<?php echo e(route('indices.index')); ?>" class="btn btn-danger">Cancelar</a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Código</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Imagen</th>
                    <th>Laboral</th>
                    <th>Sexo</th>
                    <th>Deportes</th>
                    <th>Nacionalidad</th>
                    <th>Comunidad A.</th>
                    <th>Población</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $sujetos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujeto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($sujeto->id); ?></td>
                    <td><?php echo e($sujeto->codigo); ?></td>
                    <td><?php echo e($sujeto->fechaNac); ?></td>
                    <td><?php echo e($sujeto->imagenurl); ?></td>
                    <td><?php echo e($sujeto->trabaja); ?></td>
                    <td><?php echo e($sujeto->sexo); ?></td>
                    <td><?php echo e($sujeto->deportes); ?></td>
                    <td><?php echo e($sujeto->nacionalidade_id); ?></td>
                    <td><?php echo e($sujeto->comunidade_id); ?></td>
                    <td><?php echo e($sujeto->poblacione_id); ?></td>
                    <td><?php echo e($sujeto->created_at); ?></td>
                    <td><?php echo e($sujeto->updated_at); ?></td>
                    <td width="10px">
                    <a href="<?php echo e(route('sujetos.show',$sujeto->id)); ?>" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="<?php echo e(route('sujetos.edit',$sujeto->id)); ?>" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    <?php echo Form::open(['route'=> ['sujetos.destroy',$sujeto->id],
                     'method' => 'DELETE']); ?>

                     <button class="btn btn-sm btn-danger">eliminar</button>
                     <?php echo Form::close(); ?>

                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <?php echo e($sujetos->render()); ?>

                </div>
            </div>   
        </div>
    </div>

 
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>