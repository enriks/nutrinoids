
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    <h1>Cuestionario de comedor emocional garaulet</h1>
                </div>
                <div class= "panel-body">
                    {!! Form::open(['route'=>'comedors.store']) !!}
                    {{ Form::hidden('user_id',auth()->user()->id) }}
                    @include('admin.comedors.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div> 
</div>
 
@endsection
               
            
 

 