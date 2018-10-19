

<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                <h1>Cuestionario de estilo de vida: suplementos de vitaminas y minerales</h1>
                </div>
                <div class= "panel-body">
                  <p>Antes de este último año, ¿tomó usted más de un mes, pastillas, cápsulas o comprimidos de vitaminas o minerales?</p>
                     <p>
                      Si<input name="tomoVit" type="radio" value="Si" id="tomoVit">
                    No<input name="tomoVit" type="radio" value="No" id="tomoVit">
                  </p>
                    <div class="form-group" id="botonno">
        <a id="cancelar" href="<?php echo e(route('indices.index')); ?>" class="btn btn-primary">Guardar y continuar</a>
    </div>
                    <?php echo Form::open(['route'=>'vitamins.store']); ?>

                    <?php echo e(Form::hidden('user_id',auth()->user()->id)); ?>

                    <?php echo $__env->make('admin.vitamins.trozos.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
                    <?php echo Form::close(); ?>


                </div>
            </div>
        </div>  
    </div> 
</div>
 
<?php $__env->stopSection(); ?>
               
            
 

 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>