
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    <h1>Cuestionario de registro de 3 días</h1>
                </div>
                <div class= "panel-body">
                    {!! Form::open(['route'=>'registros.store']) !!}
                    {{ Form::hidden('user_id',auth()->user()->id) }}
                    @include('admin.registros.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div> 
</div>
 
@endsection
               
            
 

 