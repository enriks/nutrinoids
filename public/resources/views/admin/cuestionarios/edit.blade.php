@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Cuestionario
                </div>
                <div class= "panel-body">
                    {!! Form::model($cuestionario,['route'=>['cuestionarios.update',$cuestionario->id],
                    'method' =>'PUT', 'files'=> true]) !!}
                       @include('admin.cuestionarios.trozos.form') 
                    {!! Form::close() !!}
<a id="cancelar" href="{{ route('cuestionarios.index',$cuestionario->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection