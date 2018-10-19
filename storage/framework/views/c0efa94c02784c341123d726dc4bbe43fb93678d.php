

<div class="container">
    

<div class="form-group">
    <?php echo e(Form::label('adherencia','Especifique frecuencia y adherencia de su dieta:')); ?>

    <?php echo e(Form::text('adherencia', null, ['class'=> 'form-control','placeholder'=>'Rellenar solo si a seguido una dieta expliquela' , 'id'=>'adherencia'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('frecuencia', 'Frecuencia con la que ah seguido su dieta: ')); ?>

        <label >
            <?php echo e(Form::radio('frecuencia', 'nunca')); ?> nunca
        </label>
        <label >
            <?php echo e(Form::radio('frecuencia', 'diaria')); ?> diaria
        </label>
        <label >
            <?php echo e(Form::radio('frecuencia', 'semanal')); ?> semanal
        </label>
        <label >
            <?php echo e(Form::radio('frecuencia', 'ocacional')); ?> Mensual
        </label>
</div>


<div class="form-group">
    <?php echo e(Form::submit('Guardar  y Continuar',['class'=> 'btn btn-sm btn-primary'])); ?>

</div>                  
</div>