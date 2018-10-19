

<div class="form-group">
    <?php echo e(Form::label('nombreCuestionario','Nombre del Cuestionario')); ?>

    <?php echo e(Form::text('nombreCuestionario', null, ['class'=> 'form-control', 'id'=>'nombre'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('archivo','Files')); ?>

    <?php echo e(Form::file('archivo')); ?>

</div>
<div class="form-group">
    <?php echo e(Form::submit('Guardar',['class'=> 'btn btn-sm btn-primary'])); ?>

</div>
                