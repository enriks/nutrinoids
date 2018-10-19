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
                       @include('admin.bollerias.trozos.form') 
                    {!! Form::close() !!}
                    <a id="cancelar" href="{{ route('bollerias.index',$Bolleria->id) }}" class="btn btn-danger">Cancelar</a>

                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection