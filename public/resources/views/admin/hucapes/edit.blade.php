@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar hucape
                </div>
                <div class= "panel-body">
                    {!! Form::model($hucape,['route'=>['hucapes.update',$hucape->id],
                    'method' =>'PUT']) !!}
                       @include('admin.hucapes.trozos.form') 
                    {!! Form::close() !!}
 <a id="cancelar" href="{{ route('hucapes.index',$hucape->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection