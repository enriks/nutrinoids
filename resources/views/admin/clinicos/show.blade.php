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
                   
                   <p><strong>ID</strong>{{ $Clinico->id}}</p>
                    <p><strong>antFam</strong>{{ $Clinico->antFam}}</p>
                    <p><strong>anPerPat</strong>{{ $Clinico->anPerPat}}</p>
                    <p><strong>antPerQuir</strong>{{ $Clinico->antPerQuir}}</p>
                    <p><strong>problemAct</strong>{{ $Clinico->problemAct}}</p>
                    <p><strong>medic</strong>{{ $Clinico->medic}}</p>
                    <p><strong>alcohol</strong>{{ $Clinico->alcohol}}</p>
                    <p><strong>fumas</strong>{{ $Clinico->fumas}}</p>
                    <p><strong>drogas</strong>{{ $Clinico->drogas}}</p>
                    <p><strong>alergia</strong>{{ $Clinico->alergia}}</p>
                    <a id="cancelar" href="{{ route('clinicos.index',$Clinico->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection