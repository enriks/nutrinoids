
<head>
        <link rel="stylesheet" href="resources/assets/css/bootstrap-select.css">
    
</head>

                    <select id="select" name="bollerias" class="selectpicker col-md-8" data-show-subtext="true" data-live-search="true">
                            @foreach($users as $user)
                            <option data-subtext="{{$user->codigo}}" value="{{$user->id}}">{{$user->name}} {{$user->lastname}}</option>
                            @endforeach
                        </select>

<div class="form-group">
    {{Form::label('peso','Peso')}}
    {{Form::number('peso', null, ['class'=> 'form-control' ,'step'=>'any','id'=>'peso'])}}
</div>
<div class="form-group">
    {{Form::label('talla','Talla')}}
    {{Form::number('talla', null, ['class'=> 'form-control','step'=>'any', 'id'=>'talla'])}}
</div>
<div class="form-group">
    {{Form::label('imc','IMC')}}
    {{Form::number('imc', null, ['class'=> 'form-control','step'=>'any', 'id'=>'imc'])}}
</div>
<div class="form-group">
    {{Form::label('metBasal','Metabolismo Basal')}}
    {{Form::number('metBasal', null, ['class'=> 'form-control','step'=>'any', 'id'=>'metBasal'])}}
</div>

<div class="form-group">
    {{Form::label('masaGrasa','Masa Grasa')}}
    {{Form::number('masaGrasa', null, ['class'=> 'form-control','step'=>'any', 'id'=>'masaGrasa'])}}
</div>
<div class="form-group">
    {{Form::label('masaLibre','Masa Libre')}}
    {{Form::number('masaLibre', null, ['class'=> 'form-control','step'=>'any', 'id'=>'masaLibre'])}}
</div>
<div class="form-group">
    {{Form::label('masaMusculo','Masa Músculo')}}
    {{Form::number('masaMusculo', null, ['class'=> 'form-control','step'=>'any', 'id'=>'masaMusculo'])}}
</div>
<div class="form-group">
    {{Form::label('masaOsea','Masa Ósea')}}
    {{Form::number('masaOsea', null, ['class'=> 'form-control','step'=>'any', 'id'=>'masaOsea'])}}
</div>
<div class="form-group">
    {{Form::label('agua','Agua')}}
    {{Form::number('agua', null, ['class'=> 'form-control','step'=>'any', 'id'=>'agua'])}}
</div>


<div class="form-group">
    {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
</div>                  

 <script src="../resources/assets/js/bootstrap-select.js"></script>
