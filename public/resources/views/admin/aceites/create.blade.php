
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h1>Cuestionario de frecuencia de consumo: Aceites y grasas</h1>
                </div>
                <div class= "panel-body">
                    {!! Form::open(['route'=>'aceites.store']) !!}
                    @include('admin.aceites.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div> 
</div>
 
@endsection
               
            
 

 