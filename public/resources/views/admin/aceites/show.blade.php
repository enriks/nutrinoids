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
                   
                   <p><strong>ID</strong>{{ $Aceite->id}}</p>
                    <p><strong>aceiteOliva</strong>{{ $Aceite->aceiteOliva}}</p>
                    <p><strong>aceiteOlivaVirgen</strong>{{ $Aceite->aceiteOlivaVirgen}}</p>
                    <p><strong>aceiteMaiz</strong>{{ $Aceite->aceiteMaiz}}</p>
                    <p><strong>aceiteGirasol</strong>{{ $Aceite->aceiteGirasol}}</p>
                    <p><strong>aceiteSoja</strong>{{ $Aceite->aceiteSoja}}</p>
                    <p><strong>mezclaAnteriores</strong>{{ $Aceite->mezclaAnteriores}}</p>
                    <p><strong>margarina</strong>{{ $Aceite->margarina}}</p>
                    <p><strong>mantequilla</strong>{{ $Aceite->mantequilla}}</p>
                    <p><strong>mantecaCerdo</strong>{{ $Aceite->mantecaCerdo}}</p>
                    <a id="cancelar" href="{{ route('aceites.index',$Aceite->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection