



<div class="form-group">
    <?php echo e(Form::label('estudioActual','¿Estudias actualmente?')); ?>

   <?php echo e(Form::select('estudioActual', ['1'=>'Si','0'=>'No'],null,['class'=>'form-control', 'id'=>'estudioActual'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('nivelEstudio', '¿Que nivel esta cursando?')); ?>

    <?php echo e(Form::select('nivelEstudio', ['Estudios secundarios (Bachiller/ FP I)'=>'Estudios secundarios (Bachiller/ FP I)','Estudios superiores (Universidad/ FP II)'=>'Estudios superiores (Universidad/ FP II)','Estudios primarios'=>'Estudios primarios','Sin estudios'=>'Sin estudios'],null,['class'=>'form-control', 'id'=>'nivelEstudio'])); ?>

</div>


<div class="form-group">
    <?php echo e(Form::label('nivelEstudioPadre', '¿Nivel de estudio del padre?')); ?>

    <?php echo e(Form::select('nivelEstudioPadre', ['sinEstudios'=>'Sin estudios','primarios'=>'Estudios primarios','secundarios'=>'Estudios secundarios','superiores'=>'Estudios superiores','No Sabe'=>'No sabe'],null,['class'=>'form-control', 'id'=>'nivelEstudioPadre'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('nivelEstudioMadre', '¿Nivel de estudio de la madre?')); ?>

    <?php echo e(Form::select('nivelEstudioMadre', ['sinEstudios'=>'Sin estudios','primarios'=>'Estudios primarios','secundarios'=>'Estudios secundarios','superiores'=>'Estudios superiores','No Sabe'=>'No sabe'],null,['class'=>'form-control', 'id'=>'nivelEstudioMadre'])); ?>

</div>




<div class="form-group">
    <?php echo e(Form::submit('Guardar y Finalizar',['class'=> 'btn btn-sm btn-primary'])); ?>

</div>                  