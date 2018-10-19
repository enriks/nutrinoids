
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Cuestionario de estilo de vida</h1>
                </div>
                <div class= "panel-body">
                    {!! Form::open(['route'=>'sujetos.store','files'=> true]) !!}
                    @include('admin.sujetos.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div> 
</div>
 
@endsection
               
            
 

 