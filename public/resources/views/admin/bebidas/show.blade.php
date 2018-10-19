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

                    <p><strong>ID</strong>{{ $Bebida->id}}</p>
                    <p><strong>bebidasCabonatadasAzucar</strong>{{ $Bebida->bebidasCabonatadasAzucar}}</p>
                    <p><strong>bebidasCarbonatadasBajasCalorias</strong>{{ $Bebida->bebidasCarbonatadasBajasCalorias}}</p>
                    <p><strong>zumoNaranja</strong>{{ $Bebida->zumoNaranja}}</p>
                    <p><strong>zumoOtrasFrutas</strong>{{ $bebida->zumoOtrasFrutas}}</p>
                    <p><strong>cafeDesc</strong>{{ $bebida->cafeDesc}}</p>
                    <p><strong>cafe</strong>{{ $bebida->cafe}}</p>
                    <p><strong>te</strong>{{ $bebida->te}}</p>
                    <p><strong>mosto</strong>{{ $bebida->mosto}}</p>
                    <p><strong>vinoRosado</strong>{{ $bebida->vinoRosado}}</p>
                    <p><strong>vinoMoscatel</strong>{{ $bebida->vinoMoscatel}}</p>
                    <p><strong>vinoTintoJoven</strong>{{ $bebida->vinoTintoJoven}}</p>
                    <p><strong>vinoTintoAñejo</strong>{{ $bebida->vinoTintoAñejo}}</p>
                    <p><strong>vinoBlanco</strong>{{ $bebida->vinoBlanco}}</p>
                    <p><strong>cerveza</strong>{{ $bebida->cerveza}}</p>
                    <p><strong>licores</strong>{{ $bebida->licores}}</p>
                    <p><strong>destilados</strong>{{ $bebida->destilados}}</p>
                    <a id="cancelar" href="{{ route('bebidas.index',$bebida->id) }}" class="btn btn-danger">Cancelar</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
