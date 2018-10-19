
<head>
        <link rel="stylesheet" href="../resources/assets/css/bootstrap-select.css">
    
</head>
                <?php echo e(Form::label('user_id','Usuario')); ?>

                    <select id="user_id" name="user_id" class="selectpicker col-md-12" data-show-subtext="true" data-live-search="true">
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option data-subtext="<?php echo e($user->codigo); ?>" value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> <?php echo e($user->lastname); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

<div class="form-group">
    <?php echo e(Form::label('peso','Peso')); ?>

    <?php echo e(Form::number('peso', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'peso'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('talla','Talla')); ?>

    <?php echo e(Form::number('talla', null, ['class'=> 'form-control','placeholder'=>'' ,'step'=>'any', 'id'=>'talla'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('imc','IMC')); ?>

    <?php echo e(Form::number('imc', null, ['class'=> 'form-control','placeholder'=>'(kg/m²)' ,'step'=>'any', 'id'=>'imc'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('metBasal','Metabolismo Basal')); ?>

    <?php echo e(Form::number('metBasal', null, ['class'=> 'form-control','placeholder'=>'' ,'step'=>'any', 'id'=>'metBasal'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('masaGrasa','Masa Grasa')); ?>

    <?php echo e(Form::number('masaGrasa', null, ['class'=> 'form-control','placeholder'=>'kg' ,'step'=>'any', 'id'=>'masaGrasa'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('masaGrasapor','Masa Grasa Porcentual')); ?>

    <?php echo e(Form::number('masaGrasapor', null, ['class'=> 'form-control','placeholder'=>'%' ,'step'=>'any', 'id'=>'masaGrasapor'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('masaLibre','Masa Libre')); ?>

    <?php echo e(Form::number('masaLibre', null, ['class'=> 'form-control','placeholder'=>'kg' ,'step'=>'any', 'id'=>'masaLibre'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('masaLibrepor','Masa Libre Porcentual')); ?>

    <?php echo e(Form::number('masaLibrepor', null, ['class'=> 'form-control','placeholder'=>'%' ,'step'=>'any', 'id'=>'masaLibrepor'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('masaMusculo','Masa Músculo')); ?>

    <?php echo e(Form::number('masaMusculo', null, ['class'=> 'form-control','placeholder'=>'kg' ,'step'=>'any', 'id'=>'masaMusculo'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('masaMusculopor','Masa Músculo Porcentual')); ?>

    <?php echo e(Form::number('masaMusculopor', null, ['class'=> 'form-control','placeholder'=>'%' ,'step'=>'any', 'id'=>'masaMusculopor'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('masaOsea','Masa Ósea')); ?>

    <?php echo e(Form::number('masaOsea', null, ['class'=> 'form-control','placeholder'=>'kg' ,'step'=>'any', 'id'=>'masaOsea'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('masaOseapor','Masa Ósea Porcentual')); ?>

    <?php echo e(Form::number('masaOseapor', null, ['class'=> 'form-control','placeholder'=>'%' ,'step'=>'any', 'id'=>'masaOseapor'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('agua','Agua')); ?>

    <?php echo e(Form::number('agua', null, ['class'=> 'form-control','placeholder'=>'litros' ,'step'=>'any', 'id'=>'agua'])); ?>

</div>


<div class="form-group">
    <?php echo e(Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary'])); ?>

</div>                  

 <script src="../resources/assets/js/bootstrap-select.js"></script>
