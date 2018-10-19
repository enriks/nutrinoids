@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong>{{ $Vitamin->id}}</p>
                    <p><strong>vitamin</strong>{{ $Vitamin->vitamin}}</p>
                    <p><strong>cantPast</strong>{{ $Vitamin->cantPast}}</p>
                    <p><strong>catTiemp</strong>{{ $Vitamin->catTiemp}}</p>
                    <a id="cancelar" href="{{ route('vitamins.index',$Vitamin->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection