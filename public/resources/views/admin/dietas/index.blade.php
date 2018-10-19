@extends('layouts.app')
@section('content')
   <div class="row justify-content-md-center">
       <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
             <div class="row align-items-end">
                <div class="col col-offset-4">
                    <div class="card">
                        <div class="card-header">
                            Cuestionario de dietas
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Seleccione sujeto:</h5>
                             <select id="select" name="dietas" class="selectpicker col-md-8" data-show-subtext="true" data-live-search="true">
                       @foreach($dietas as $dieta)
                       <option data-subtext="{{$dieta->codigo}}" value="{{$dieta->id}}">{{$dieta->name}} {{$dieta->lastname}}</option>
                        @endforeach
                    </select>
                    <a  id="editar" href="" class="btn btn-warning">Editar</a>
                        </div>
                    </div>
                    <div class="panel-body">


                    </div>
                </div>
            </div>
            </div>   
        </div>
    </div>
 
@endsection
 
