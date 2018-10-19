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
                   
                   <p><strong>ID</strong>{{ $fruta->id}}</p>
                    <p><strong>naranja</strong>{{ $fruta->naranja}}</p>
                    <p><strong>platano</strong>{{ $fruta->platano}}</p>
                    <p><strong>manzana</strong>{{ $fruta->manzana}}</p>
                    <p><strong>fresas</strong>{{ $fruta->fresas}}</p>
                    <p><strong>cerezas</strong>{{ $fruta->cerezas}}</p>
                    <p><strong>melocoton</strong>{{ $fruta->melocoton}}</p>
                    <p><strong>sandia</strong>{{ $fruta->sandia}}</p>
                    <p><strong>melon/strong>{{ $fruta->melon}}</p>
                    <p><strong>kiwi</strong>{{ $fruta->kiwi}}</p>
                    <p><strong>uvas</strong>{{ $fruta->uvas}}</p>
                    <p><strong>aceitunas</strong>{{ $fruta->aceitunas}}</p>
                    <p><strong>frutasAlmibar</strong>{{ $fruta->frutasAlmibar}}</p>
                    <p><strong>datiles</strong>{{ $fruta->datiles}}</p>
                    <p><strong>almendras</strong>{{ $fruta->almendras}}</p>
                    <p><strong>nueces</strong>{{ $fruta->nueces}}</p>
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection