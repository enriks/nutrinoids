@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar legumbre
                </div>
                <div class= "panel-body table-responsive">
                    {!! Form::model($Legumbre,['route'=>['legumbres.update',$Legumbre->id],
                    'method' =>'PUT']) !!}
                      {{ Form::hidden('user_id', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'user_id']) }}
                       @include('admin.legumbres.trozos.form') 
                    {!! Form::close() !!}
                    <a id="cancelar" href="{{ route('legumbres.index',$Legumbre->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection