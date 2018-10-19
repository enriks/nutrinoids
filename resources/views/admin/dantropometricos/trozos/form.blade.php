
<head>
        <link rel="stylesheet" href="../resources/assets/css/bootstrap-select.css">
    
</head>
                {{Form::label('user_id','Usuario')}}
                    <select id="user_id" name="user_id" class="selectpicker col-md-12" data-show-subtext="true" data-live-search="true">
                            @foreach($users as $user)

                            <option data-subtext="{{$user->codigo}}" value="{{$user->id}}">{{$user->name}} {{$user->lastname}}</option>
                            @endforeach
                        </select>

<div class="form-group">
    {{Form::label('peso','Peso')}}
    {{Form::number('peso', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'peso'])}}
</div>
<div class="form-group">
    {{Form::label('talla','Talla')}}
    {{Form::number('talla', null, ['class'=> 'form-control','placeholder'=>'' ,'step'=>'any', 'id'=>'talla'])}}
</div>
<div class="form-group">
    {{Form::label('imc','IMC')}}
    {{Form::number('imc', null, ['class'=> 'form-control','placeholder'=>'(kg/m²)' ,'step'=>'any', 'id'=>'imc'])}}
</div>
<div class="form-group">
    {{Form::label('metBasal','Metabolismo Basal')}}
    {{Form::number('metBasal', null, ['class'=> 'form-control','placeholder'=>'' ,'step'=>'any', 'id'=>'metBasal'])}}
</div>

<div class="form-group">
    {{Form::label('masaGrasa','Masa Grasa')}}
    {{Form::number('masaGrasa', null, ['class'=> 'form-control','placeholder'=>'kg' ,'step'=>'any', 'id'=>'masaGrasa'])}}
</div>
<div class="form-group">
    {{Form::label('masaGrasapor','Masa Grasa Porcentual')}}
    {{Form::number('masaGrasapor', null, ['class'=> 'form-control','placeholder'=>'%' ,'step'=>'any', 'id'=>'masaGrasapor'])}}
</div>
<div class="form-group">
    {{Form::label('masaLibre','Masa Libre')}}
    {{Form::number('masaLibre', null, ['class'=> 'form-control','placeholder'=>'kg' ,'step'=>'any', 'id'=>'masaLibre'])}}
</div>
<div class="form-group">
    {{Form::label('masaLibrepor','Masa Libre Porcentual')}}
    {{Form::number('masaLibrepor', null, ['class'=> 'form-control','placeholder'=>'%' ,'step'=>'any', 'id'=>'masaLibrepor'])}}
</div>
<div class="form-group">
    {{Form::label('masaMusculo','Masa Músculo')}}
    {{Form::number('masaMusculo', null, ['class'=> 'form-control','placeholder'=>'kg' ,'step'=>'any', 'id'=>'masaMusculo'])}}
</div>
<div class="form-group">
    {{Form::label('masaMusculopor','Masa Músculo Porcentual')}}
    {{Form::number('masaMusculopor', null, ['class'=> 'form-control','placeholder'=>'%' ,'step'=>'any', 'id'=>'masaMusculopor'])}}
</div>
<div class="form-group">
    {{Form::label('masaOsea','Masa Ósea')}}
    {{Form::number('masaOsea', null, ['class'=> 'form-control','placeholder'=>'kg' ,'step'=>'any', 'id'=>'masaOsea'])}}
</div>
<div class="form-group">
    {{Form::label('masaOseapor','Masa Ósea Porcentual')}}
    {{Form::number('masaOseapor', null, ['class'=> 'form-control','placeholder'=>'%' ,'step'=>'any', 'id'=>'masaOseapor'])}}
</div>

<div class="form-group">
    {{Form::label('agua','Agua')}}
    {{Form::number('agua', null, ['class'=> 'form-control','placeholder'=>'litros' ,'step'=>'any', 'id'=>'agua'])}}
</div>


<div class="form-group">
    {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
</div>                  

 <script src="../resources/assets/js/bootstrap-select.js"></script>
