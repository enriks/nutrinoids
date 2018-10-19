@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar bolleria
                </div>
                <div class= "panel-body">
                    {!! Form::model($Bolleria,['route'=>['bollerias.update',$Bolleria->id],
                    'method' =>'PUT']) !!}
                      {{ Form::hidden('user_id', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'user_id']) }}
                       @include('admin.bollerias.trozos.form') 
                    {!! Form::close() !!}
                    <a id="cancelar" href="{{ route('bollerias.index') }}" class="btn btn-danger">Cancelar</a>

                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection