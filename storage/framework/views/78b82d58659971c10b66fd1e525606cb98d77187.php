

<?php echo e(Form::hidden('user_id',auth()->user()->id)); ?>


<div class="form-group">
    <?php echo e(Form::label('nacionalidade_id','Nacionalidad')); ?>

    <?php echo e(Form::select('nacionalidade_id', $nacionalidades, null,  ['class'=> 'form-control', 'id'=>'nacionalidade'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('comunidade_id','Comunidad')); ?>

    <?php echo e(Form::select('comunidade_id', $comunidades, null,  ['class'=> 'form-control', 'id'=>'comunidade'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('poblacione_id','Población')); ?>

    <?php echo e(Form::select('poblacione_id', $poblaciones, null,  ['class'=> 'form-control', 'id'=>'poblacione'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('fechaNac','Fecha de Nacimiento')); ?>

    <?php echo e(Form::date('fechaNac', null, ['class'=> 'form-control', 'id'=>'fechaNac'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('imagenurl','Imagen :')); ?>

    <br>
    <?php echo e(Form::file('imagenurl')); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('trabaja', 'Jornada laboral actual: ')); ?>

    <br>
        <label >
            <?php echo e(Form::radio('trabaja', 'COMPLETA')); ?> Completa 
        </label>
        <label >
            <?php echo e(Form::radio('trabaja', 'PARCIAL')); ?> Parcial
        </label>
        <label >
            <?php echo e(Form::radio('trabaja', 'TURNO')); ?> Turno 
        </label>
        <label >
            <?php echo e(Form::radio('trabaja', 'NO')); ?> No trabaja
        </label>
</div>

<div class="form-group">
    <?php echo e(Form::label('sexo', '  Sexo : ')); ?>

    <br>
        <label >
            <?php echo e(Form::radio('sexo', 'MASCULINO')); ?> Masculino 
        </label>
        <label >
            <?php echo e(Form::radio('sexo', 'FEMENINO')); ?> Femenino
        
</div>
<div class="form-group">
    <?php echo e(Form::label('deportes', '¿Practicas deporte?')); ?>

    <br>
        <label >
            <?php echo e(Form::radio('deportes', 'PRACTICA')); ?> Practica
        </label>
        <label >
            <?php echo e(Form::radio('deportes', 'NO PRACTICA')); ?> No Práctica
        
</div>
<div class="form-group" hidden>
    <?php echo e(Form::label('cuestionarios', 'Cuestionarios :')); ?>

    <div>
    <?php $__currentLoopData = $cuestionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuestionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label hidden>
            <?php echo e(Form::checkbox('cuestionarios[]', $cuestionario->id)); ?> <?php echo e($cuestionario->nombreCuestionario); ?>

        </label>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
</div>

<div class="form-group">
    <?php echo e(Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary'])); ?>

</div>          