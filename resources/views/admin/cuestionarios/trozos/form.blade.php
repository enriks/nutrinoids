

<div class="form-group">
    {{Form::label('nombreCuestionario','Nombre del Cuestionario')}}
    {{Form::text('nombreCuestionario', null, ['class'=> 'form-control', 'id'=>'nombre'])}}
</div>

<div class="form-group">
    {{Form::label('archivo','Files')}}
    {{Form::file('archivo')}}
</div>
<div class="form-group">
    {{Form::submit('Guardar',['class'=> 'btn btn-sm btn-primary']) }}
</div>
                