@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 
                </div>
                <div class= "panel-body">
                    {!! Form::model($dantropometrico,['route'=>['dantropometricos.update',$dantropometrico->id],
                    'method' =>'PUT']) !!}
                       @include('admin.dantropometricos.trozos.form') 
                    {!! Form::close() !!}
<a id="cancelar" href="{{ route('dantropometricos.index',$dantropometrico->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection