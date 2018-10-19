@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar aceite
                </div>
                <div class= "panel-body">
                    {!! Form::model($Aceite,['route'=>['aceites.update',$Aceite->id],
                    'method' =>'PUT']) !!}
                      {{ Form::hidden('user_id', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'user_id']) }}
                       @include('admin.aceites.trozos.form') 
                    {!! Form::close() !!}
                    <a id="cancelar" href="{{ route('aceites.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection