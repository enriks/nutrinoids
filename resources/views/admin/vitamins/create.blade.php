
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                <h1>Cuestionario de estilo de vida: suplementos de vitaminas y minerales</h1>
                </div>
                <div class= "panel-body">
                  <p>Antes de este último año, ¿tomó usted más de un mes, pastillas, cápsulas o comprimidos de vitaminas o minerales?</p>
                     <p>
                      Si<input name="tomoVit" type="radio" value="Si" id="tomoVit">
                    No<input name="tomoVit" type="radio" value="No" id="tomoVit">
                  </p>
                    <div class="form-group" id="botonno">
        <a id="cancelar" href="{{ route('indices.index') }}" class="btn btn-primary">Guardar y continuar</a>
    </div>
                    {!! Form::open(['route'=>'vitamins.store']) !!}
                    {{ Form::hidden('user_id',auth()->user()->id) }}
                    @include('admin.vitamins.trozos.form') 
                    {!! Form::close() !!}

                </div>
            </div>
        </div>  
    </div> 
</div>
 
@endsection
               
            
 

 