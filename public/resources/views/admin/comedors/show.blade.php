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
                   

                   <p><strong>ID</strong>{{ $comedor->id}}</p>
                    <p><strong>pg1</strong>{{ $comedor->pg1}}</p>
                    <p><strong>pg2</strong>{{ $comedor->pg2}}</p>
                    <p><strong>pg3</strong>{{ $comedor->pg3}}</p>
                    <p><strong>pg4</strong>{{ $comedor->pg4}}</p>
                    <p><strong>pg5</strong>{{ $comedor->pg5}}</p>
                    <p><strong>pg6</strong>{{ $comedor->pg6}}</p>
                    <p><strong>pg7</strong>{{ $comedor->pg7}}</p>
                    <p><strong>pg8</strong>{{ $comedor->pg8}}</p>
                    <p><strong>pg9</strong>{{ $comedor->pg9}}</p>
                    <p><strong>pg10</strong>{{ $comedor->pg10}}</p>
                    <p><strong>total</strong>{{ $comedor->total}}</p>

                  <a id="cancelar" href="{{ route('comedors.index',$comedor->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection