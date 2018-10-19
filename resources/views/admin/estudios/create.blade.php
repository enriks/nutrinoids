
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                </div>
                <div class= "panel-body">
                    {!! Form::open(['route'=>'estudios.store']) !!}
                    {{ Form::hidden('user_id',auth()->user()->id) }}
                    @include('admin.estudios.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div> 
</div>
 
@endsection
               
            
 

 