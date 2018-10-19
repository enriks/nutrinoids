
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear Post
                </div>
                <div class= "panel-body">
                    {!! Form::open(['route'=>'cuestionarios.store','files'=> true]) !!}
                    {{ Form::hidden('user_id',auth()->user()->id) }}
                    @include('admin.cuestionarios.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div> 
</div>
 
@endsection
               
            
 

 