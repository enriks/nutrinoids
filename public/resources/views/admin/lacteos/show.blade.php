@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                    Ver Cuestionario

                </div>
                <div class="panel-body">

                    <p><strong>ID</strong>{{ $Lacteo->id}}</p>
                    <p><strong>lecheEnt</strong>{{ $Lacteo->lecheEnt}}</p>
                    <p><strong>lecheSemi</strong>{{ $Lacteo->lecheSemi}}</p>
                    <p><strong>lecheDesc</strong>{{ $Lacteo->lecheDesc}}</p>
                    <p><strong>lecheCond</strong>{{ $Lacteo->lecheCond}}</p>
                    <p><strong>nata</strong>{{ $Lacteo->nata}}</p>
                    <p><strong>batidoLeche</strong>{{ $Lacteo->batidoLeche}}</p>
                    <p><strong>yogurtEnt</strong>{{ $Lacteo->yogurtEnt}}</p>
                    <p><strong>yogurtDesc</strong>{{ $Lacteo->yogurtDesc}}</p>
                    <p><strong>petit</strong>{{ $Lacteo->petit}}</p>
                    <p><strong>requeson</strong>{{ $Lacteo->requeson}}</p>
                    <p><strong>quesoPorciones</strong>{{ $Lacteo->quesoPorciones}}</p>
                    <p><strong>otrosQuesos</strong>{{ $Lacteo->otrosQuesos}}</p>
                    <p><strong>quesoBlanco</strong>{{ $Lacteo->quesoBlanco}}</p>
                    <p><strong>natillas</strong>{{ $Lacteo->natillas}}</p>
                    <p><strong>helados</strong>{{ $Lacteo->helados}}</p>
                    <a id="cancelar" href="{{ route('lacteos.index',$Lacteo->id) }}" class="btn btn-danger">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
