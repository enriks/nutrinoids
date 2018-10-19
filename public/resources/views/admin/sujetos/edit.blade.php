@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Sujeto
                </div>
                <div class= "panel-body">
                    {!! Form::model($sujeto,['route'=>['sujetos.update',$sujeto->id],
                    'method' =>'PUT', 'files'=> true]) !!}
                       @include('admin.sujetos.trozos.form') 
                    {!! Form::close() !!}
 <a id="cancelar" href="{{ route('sujetos.index',$sujeto->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection