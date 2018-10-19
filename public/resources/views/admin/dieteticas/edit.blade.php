@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar dietetica
                </div>
                <div class= "panel-body">
                    {!! Form::model($dietetica,['route'=>['dieteticas.update',$dietetica->id],
                    'method' =>'PUT']) !!}
                       @include('admin.dieteticas.trozos.form') 
                    {!! Form::close() !!}
 <a id="cancelar" href="{{ route('dieteticas.index',$dietetica->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection