@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar verdura
                </div>
                <div class= "panel-body">
                    {!! Form::model($verdura,['route'=>['verduras.update',$verdura->id],
                    'method' =>'PUT']) !!}
                       @include('admin.verduras.trozos.form') 
                    {!! Form::close() !!}
 <a id="cancelar" href="{{ route('verduras.index',$verdura->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection