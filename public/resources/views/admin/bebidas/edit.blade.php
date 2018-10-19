@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar bebida
                </div>
                <div class= "panel-body">
                    {!! Form::model($Bebida,['route'=>['bebidas.update',$Bebida->id],
                    'method' =>'PUT']) !!}
                       @include('admin.bebidas.trozos.form') 
                    {!! Form::close() !!}
                    <a id="cancelar" href="{{ route('bebidas.index',$Bebida->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection