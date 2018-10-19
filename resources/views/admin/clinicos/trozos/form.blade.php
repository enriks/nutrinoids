

<div class="container">
<div class="from-group">
    {{ Form::label('antFam', '¿Antecedentes familiares?')}}
    {{ Form::select('antFam', ['ninguno'=>'Ninguno','Cancer'=>'Cancer','Obesidad'=>'Obesidad','DM1'=>'DM1','DM2'=>'DM2','HTA'=>'HTA','Hipertrigliceridemia'=>'Hipertrigliceridemia','Hipercolesterolemia'=>'Hipercolesterolemia','Hipertiroidismo'=>'Hipertiroidismo','Hipotiroidismo'=>'Hipotiroidismo','Alzheimer'=>'Alzheimer'],null,['class'=>'form-control', 'id'=>'antFam']) }}
</div>
   <div class="from-group">
    {{ Form::label('antPerPat', '¿Antecedentes personales?')}}
    {{ Form::select('antPerPat', ['ninguno'=>'Ninguno','Cancer'=>'Cancer','Obesidad'=>'Obesidad','DM1'=>'DM1','DM2'=>'DM2','HTA'=>'HTA','Hipertrigliceridemia'=>'Hipertrigliceridemia','Hipercolesterolemia'=>'Hipercolesterolemia','Hipertiroidismo'=>'Hipertiroidismo','Hipotiroidismo'=>'Hipotiroidismo','Alzheimer'=>'Alzheimer'],null,['class'=>'form-control', 'id'=>'antPerPat']) }}
</div>
   <div class="from-group">
    {{ Form::label('problSal', '¿Actualmente padece algún tipo de problema de salud?')}}
    {{ Form::select('problSalComb', ['Si'=>'Si','No'=>'No'],null,['class'=>'form-control', 'id'=>'problSalComb']) }}
    {{Form::text('problSal', null, ['class'=> 'form-control' ,'placeholder'=>'Especifique' ,'step'=>'any','id'=>'problSalText'])}}
</div>
<div class="form-group">
    {{Form::label('antPerQuir','¿Antecedentes quirúrgicos?')}}
    {{Form::text('antPerQuir', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'antPerQuir'])}}
</div>
<div class="form-group">
    {{Form::label('problemAct','¿Actualmente padece algún tipo de problema de salud?')}}
    {{Form::text('problemAct', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'problemAct'])}}
</div>

   <div class="from-group">
    {{ Form::label('medic', '¿Consume o ha consumido algún tipo de medicación/?')}}
    {{ Form::select('medic', ['Si'=>'Si','No'=>'No','Ya no'=>'Ya no'],null,['class'=>'form-control', 'id'=>'medic']) }}
</div>
   <div class="from-group">
    {{ Form::label('alcohol', '¿Consumes alcohol?')}}
    {{ Form::select('alcohol', ['Diariamente'=>'Diariamente','Semanalmente'=>'Semanalmente','Ocasionalmente'=>'Ocasionalmente','Nunca'=>'Nunca'],null,['class'=>'form-control', 'id'=>'alcohol']) }}
</div>
<div class="form-group">
    {{Form::label('fumas','¿Fumas?')}}
    {{ Form::select('fumas', ['1'=>'Si','0'=>'No'],null,['class'=>'form-control', 'id'=>'fumas']) }}
</div>
<div class="form-group">
    {{Form::label('drogas','¿Consumes sustancias estupefacientes “drogas”?')}}
    {{ Form::select('drogas', ['1'=>'Si','0'=>'No'],null,['class'=>'form-control', 'id'=>'drogas']) }}
</div>
<div class="form-group">0
    {{Form::label('alergia','¿Eres alérgico a algún medicamento?')}}
    {{Form::text('alergia', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'alergia'])}}
</div>
<div class="form-group">
    {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
</div> 
</div>                    