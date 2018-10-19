

{{ Form::hidden('user_id',auth()->user()->id) }}

<div class="form-group">
    {{Form::label('nacionalidade_id','Nacionalidad')}}
    {{Form::select('nacionalidade_id', $nacionalidades, null,  ['class'=> 'form-control', 'id'=>'nacionalidade'])}}
</div>
<div class="form-group">
    {{Form::label('comunidade_id','Comunidad')}}
    {{Form::select('comunidade_id', $comunidades, null,  ['class'=> 'form-control', 'id'=>'comunidade'])}}
</div>
<div class="form-group">
    {{Form::label('poblacione_id','Población')}}
    {{Form::select('poblacione_id', $poblaciones, null,  ['class'=> 'form-control', 'id'=>'poblacione'])}}
</div>

<div class="form-group">
    {{Form::label('fechaNac','Fecha de Nacimiento')}}
    {{Form::date('fechaNac', null, ['class'=> 'form-control', 'id'=>'fechaNac'])}}
</div>

<div class="form-group">
    {{Form::label('imagenurl','Imagen :')}}
    <br>
    {{Form::file('imagenurl')}}
</div>

<div class="form-group">
    {{Form::label('trabaja', 'Jornada laboral actual: ')}}
    <br>
        <label >
            {{ Form::radio('trabaja', 'COMPLETA')}} Completa 
        </label>
        <label >
            {{ Form::radio('trabaja', 'PARCIAL')}} Parcial
        </label>
        <label >
            {{ Form::radio('trabaja', 'TURNO')}} Turno 
        </label>
        <label >
            {{ Form::radio('trabaja', 'NO')}} No trabaja
        </label>
</div>

<div class="form-group">
    {{Form::label('sexo', '  Sexo : ')}}
    <br>
        <label >
            {{ Form::radio('sexo', 'MASCULINO')}} Masculino 
        </label>
        <label >
            {{ Form::radio('sexo', 'FEMENINO')}} Femenino
        
</div>
<div class="form-group">
    {{Form::label('deportes', '¿Practicas deporte?')}}
    <br>
        <label >
            {{ Form::radio('deportes', 'PRACTICA')}} Practica
        </label>
        <label >
            {{ Form::radio('deportes', 'NO PRACTICA')}} No Práctica
        
</div>
<div class="form-group" hidden>
    {{Form::label('cuestionarios', 'Cuestionarios :')}}
    <div>
    @foreach($cuestionarios as $cuestionario)
        <label hidden>
            {{ Form::checkbox('cuestionarios[]', $cuestionario->id)}} {{ $cuestionario->nombreCuestionario}}
        </label>
    @endforeach
   </div>
</div>

<div class="form-group">
    {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
</div>          