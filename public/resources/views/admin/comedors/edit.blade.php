@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar comedor
                </div>
                <div class= "panel-body">
                    {!! Form::model($comedor,['route'=>['comedors.update',$comedor->id],
                    'method' =>'PUT']) !!}
                       @include('admin.comedors.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection