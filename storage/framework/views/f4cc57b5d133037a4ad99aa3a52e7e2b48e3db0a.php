



<div class="form-group">
    <?php echo e(Form::label('masApetito', '¿A qué hora del día sientes más apetito?')); ?>

    <?php echo e(Form::select('masApetito', ['Mañana'=>'Mañana','Mediodía'=>'Mediodía','Tarde'=>'Tarde','Noche'=>'Noche','Entre horas'=>'Entre horas'],null,['class'=>'form-control', 'id'=>'masApetito'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('tardasComer', '¿Cuanto tiempo tardas en comer?')); ?>

    <?php echo e(Form::select('tardasComer', ['Poco (<15 minutos)'=>'Poco (<15 minutos)','Normal (20-30 minutos)'=>'Normal (20-30 minutos)','Mucho (>30 minutos)'=>'Mucho (>30 minutos)'],null,['class'=>'form-control', 'id'=>'tardasComer'])); ?>

</div>


<div class="form-group">
    <?php echo e(Form::label('alimentosPreferidos','Alimentos preferidos')); ?>

    <?php echo e(Form::text('alimentosPreferidos', null, ['class'=> 'form-control', 'id'=>'alimentosPreferidos'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('alimentosNoConsumidos','Alimentos no consumidos')); ?>

    <?php echo e(Form::text('alimentosNoConsumidos', null, ['class'=> 'form-control', 'id'=>'alimentosNoConsumidos'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('alimentosConsumNoAgradan','Alimentos consumidos aunque no sean de su agrado')); ?>

    <?php echo e(Form::text('alimentosConsumNoAgradan', null, ['class'=> 'form-control', 'id'=>'alimentosConsumNoAgradan'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('alimentosIndigestos','Alimentos indigestos o que sientan mal')); ?>

    <?php echo e(Form::text('alimentosIndigestos', null, ['class'=> 'form-control', 'id'=>'alimentosIndigestos'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('consumoFrutas','¿Sueles consumir frutas?')); ?>

   <?php echo e(Form::select('consumoFrutas', ['1'=>'Si','0'=>'No'],null,['class'=>'form-control', 'id'=>'consumoFrutas'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('consumoVerduras','¿Sueles consumir verduras?')); ?>

    <?php echo e(Form::select('consumoVerduras', ['1'=>'Si','0'=>'No'],null,['class'=>'form-control', 'id'=>'consumoVerduras'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('tecnicas','Tecnicas culinarias mas empleadas')); ?>

   <?php echo e(Form::select('tecnicas', ['Sencillas: hervido/vapor/plancha/horno'=>'Sencillas(hervidos/vapor/plancha/horno)','Frituras/gratinados/empanados'=>'Complejas(frituras/gratinados/empanados)'],null,['class'=>'form-control', 'id'=>'tecnicas'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('quienCocina','¿Quien cocina en casa?')); ?>

    <?php echo e(Form::select('quienCocina', ['tu'=>'Tu','Uno o mas de un familiar'=>'Uno o mas de un familiar','Una persona contratada' => 'Una persona contratada'],null,['class'=>'form-control', 'id'=>'quienCocina'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('tipoCoccion','¿Que tipo de concciones utilizas habitualmente?')); ?>

    <?php echo e(Form::select('tipoCoccion', ['plancha'=>'Plancha','fritos'=>'Fritos','Guisos, estofados' => 'Guisos, estofados','vapor' => 'Vapor','horno' => 'Horno','microondas' => 'Microondas', 'hervidos' => 'Hervidos','papillote' => 'Papillote'],null,['class'=>'form-control', 'id'=>'tipoCoccion'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('gustaCocinar','¿Que habilidad tiene para cocinar la persona encargada en el hogar?')); ?>

    <?php echo e(Form::select('gustaCocinar', ['No le gusta, lo hace por obligacion'=>'No le gusta','Le gusta cocinar normal'=>'Le gusta cocinar normal','Le gusta mucho cocinar'=>'Le gusta mucho cocinar'],null,['class'=>'form-control', 'id'=>'gustaCocinar'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('gustaComprar','Realizas la compra')); ?>

    <?php echo e(Form::select('gustaComprar', ['1'=>'Si','0'=>'No'],null,['class'=>'form-control', 'id'=>'gustaComprar'])); ?>

</div>


<div class="form-group">
    <?php echo e(Form::label('frecuenciaCompra','¿Con que frecuencia se compra?')); ?>

    <?php echo e(Form::select('frecuenciaCompra', ['1 vez a la semana'=>'1 vez a la semana','2 veces a la semana'=>'2 veces a la semana','3 o más veces a la semana'=>'3 o más veces a la semana','A diario'=>'A diario','1 vez al mes'=>'1 vez al mes'],null,['class'=>'form-control', 'id'=>'frecuenciaCompra'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('ingesta','Distribucion de comidas')); ?>

    <?php echo e(Form::select('ingesta', ['<3 comidas al dias'=>'<3 comidas al dias','3 comidas al dia'=>'3 comidas al dia','3-5 comidas al dias'=>'3-5 comidas al dias','>5 comidas al dia'=>'>5 comidas al dia'],null,['class'=>'form-control', 'id'=>'ingesta'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('alergiaAlimentaria','¿Alergias o intolerancias alimentarias?')); ?>

    <?php echo e(Form::select('alergiaAlimentaria', ['1'=>'Si','0'=>'No'],null,['class'=>'form-control', 'id'=>'alergiaAlimentaria'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('sustanEstimulante','¿Consume habitualmente cafe o sustancias estimulantes (red bull, te,
chocolate, monster, burn?')); ?>

   <?php echo e(Form::select('sustanEstimulante', ['1'=>'Si','0'=>'No'],null,['class'=>'form-control', 'id'=>'sustanEstimulante'])); ?>

</div>


<div class="form-group">
    <?php echo e(Form::label('horasSueno', '¿Horas de sueño?')); ?>

    <?php echo e(Form::select('horasSueno', ['<5_horas'=>' menos de 5 h','5-8_horas'=>'de 5 a 8 h','>8_horas'=>'más de 8 horas'],null,['class'=>'form-control', 'id'=>'horasSueno'])); ?>

       
</div>

<div class="form-group">
    <?php echo e(Form::label('calidadSueno', '  Calidad del Sueño : ')); ?>

    <?php echo e(Form::select('calidadSueno', ['buena'=>'Buena','regular'=>'Regular','mala'=>'Mala','noSabe'=>'No sabe'],null,['class'=>'form-control', 'id'=>'calidadSueno'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('hidratacion', 'Hidratación, ¿Cuántos vasos de agua al día? ')); ?>

     <?php echo e(Form::select('hidratacion', ['<3_vasosDia'=>'menor que 3 vasos al día','3-5_vasosDia'=>'De 3 a 5 vasos al día','>5_vasosDia'=>'mayor que 5 vasos al día'],null,['class'=>'form-control', 'id'=>'hidratacion'])); ?>

       
        
</div>
<div class="form-group">
    <?php echo e(Form::label('deposiciones','Hábito deposicional y frecuencia ')); ?>

    <?php echo e(Form::select('deposiciones', ['unaVezDia'=>'una vez','>unaVezDia'=>'más de una vez','3-5_VecesSemana'=>'3-5 veces por semana'],null,['class'=>'form-control', 'id'=>'deposiciones'])); ?>

       
        
</div>
<div class="form-group">
    <?php echo e(Form::label('consistenciaDep', 'Consistencia de la deposición')); ?>

    <?php echo e(Form::select('consistenciaDep', ['normal'=>'normal','estreImportante'=>'Estreñimiento','estreLigero'=>'Constipación'],null,['class'=>'form-control', 'id'=>'consistenciaDep'])); ?>

       
        
</div>


<div class="form-group">
    <?php echo e(Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary'])); ?>

</div>                  