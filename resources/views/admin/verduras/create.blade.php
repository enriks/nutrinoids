
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    <h1>Cuestionario de frecuencia de consumo: Verduras y hortalizas</h1>
                </div>
                <div class= "panel-body">
                    {!! Form::open(['route'=>'verduras.store']) !!}
                    {{ Form::hidden('user_id',auth()->user()->id) }}
                    @include('admin.verduras.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div> 
</div>
 
@endsection
               
            
 

 