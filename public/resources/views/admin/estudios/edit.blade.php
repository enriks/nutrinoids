@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar estudio
                </div>
                <div class= "panel-body">
                    {!! Form::model($estudio,['route'=>['estudios.update',$estudio->id],
                    'method' =>'PUT']) !!}
                       @include('admin.estudios.trozos.form') 
                    {!! Form::close() !!}
 <a id="cancelar" href="{{ route('estudios.index',$estudio->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection