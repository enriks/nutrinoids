@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   

                   <p><strong>ID</strong>{{ $verdura->id}}</p>
                   <p><strong>Usuario</strong>{{ $persona->user_id}}</p>
                    <p><strong>acelgas</strong>{{ $verdura->acelgas}}</p>
                    <p><strong>col</strong>{{ $verdura->col}}</p>
                    <p><strong>lechuga</strong>{{ $verdura->lechuga}}</p>
                    <p><strong>tomateCrudo</strong>{{ $verdura->tomateCrudo}}</p>
                    <p><strong>zanahoria</strong>{{ $verdura->zanahoria}}</p>
                    <p><strong>judiasVerdes</strong>{{ $verdura->judiasVerdes}}</p>
                    <p><strong>berenjenas</strong>{{ $verdura->berenjenas}}</p>
                    <p><strong>pimientos</strong>{{ $verdura->pimientas}}</p>
                    <p><strong>esparragos</strong>{{ $verdura->esparragos}}</p>
                    <p><strong>gazpacho</strong>{{ $verdura->gazpacho}}</p>
                    <p><strong>otrasVerduras</strong>{{ $verdura->otrasVerduras}}</p>
                    <p><strong>cebolla</strong>{{ $verdura->cebolla}}</p>
                    <p><strong>ajo</strong>{{ $verdura->ajo}}</p>
                    <p><strong>perejil</strong>{{ $verdura->perejil}}</p>
                    <p><strong>patatasFritasComerciales</strong>{{ $verdura->patatasFritasComerciales}}</p>
                    <p><strong>patatasFritasCaseras</strong>{{ $verdura->patatasFritasCaseras}}</p>
                    <p><strong>patatasFritasAsadas</strong>{{ $verdura->patatasFritasAsadas}}</p>
                    <p><strong>setas</strong>{{ $verdura->setas}}</p>

                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection