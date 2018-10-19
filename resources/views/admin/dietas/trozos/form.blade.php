

<div class="container">
    

<div class="form-group">
    {{Form::label('adherencia','Especifique frecuencia y adherencia de su dieta:')}}
    {{Form::text('adherencia', null, ['class'=> 'form-control','placeholder'=>'Rellenar solo si ha seguido una dieta expliquela' , 'id'=>'adherencia'])}}
</div>

<div class="form-group">
    {{Form::label('frecuencia', 'Frecuencia con la que ah seguido su dieta: ')}}
        <label >
            {{ Form::radio('frecuencia', 'nunca')}} nunca
        </label>
        <label >
            {{ Form::radio('frecuencia', 'diaria')}} diaria
        </label>
        <label >
            {{ Form::radio('frecuencia', 'semanal')}} semanal
        </label>
        <label >
            {{ Form::radio('frecuencia', 'ocacional')}} Mensual
        </label>
</div>


<div class="form-group">
    {{Form::submit('Guardar  y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
</div>                  
</div>