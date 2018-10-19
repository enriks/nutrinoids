@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar fruta
                </div>
                <div class= "panel-body">
                    {!! Form::model($Fruta,['route'=>['frutas.update',$Fruta->id],
                    'method' =>'PUT']) !!}
                       @include('admin.frutas.trozos.form') 
                    {!! Form::close() !!}
 <a id="cancelar" href="{{ route('frutas.index',$Fruta->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection