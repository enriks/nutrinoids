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
                   

                   <p><strong>ID</strong>{{ $adherencia->id}}</p>
                    <p><strong>pg1</strong>{{ $adherencia->pg1}}</p>
                    <p><strong>pg2</strong>{{ $adherencia->pg2}}</p>
                    <p><strong>pg3</strong>{{ $adherencia->pg3}}</p>
                    <p><strong>pg4</strong>{{ $adherencia->pg4}}</p>
                    <p><strong>pg5</strong>{{ $adherencia->pg5}}</p>
                    <p><strong>pg6</strong>{{ $adherencia->pg6}}</p>
                    <p><strong>pg7</strong>{{ $adherencia->pg7}}</p>
                    <p><strong>pg8</strong>{{ $adherencia->pg8}}</p>
                    <p><strong>pg9</strong>{{ $adherencia->pg9}}</p>
                    <p><strong>pg10</strong>{{ $adherencia->pg10}}</p>
                    <p><strong>pg11</strong>{{ $adherencia->pg11}}</p>
                    <p><strong>pg12</strong>{{ $adherencia->pg12}}</p>
                    <p><strong>pg13</strong>{{ $adherencia->pg13}}</p>
                    <p><strong>pg14</strong>{{ $adherencia->pg14}}</p>
                    <p><strong>total</strong>{{ $adherencia->total}}</p>

                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection