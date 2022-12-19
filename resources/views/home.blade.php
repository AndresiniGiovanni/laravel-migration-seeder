@extends('layouts.app')
@section('content')

<div class="container-fluid d-flex pt-5">

    <div id="azienda" class="d-flex flex-column">
    <h4 class="mb-4">Azienda</h4>
    @foreach ($trains as $train )
        <div>{{ $train->azienda }}</div>
    @endforeach
    </div>

    <div id="partenza" class="d-flex flex-column ms-5">
        <h4 class="mb-4">Partenza</h4>
        @foreach ($trains as $train )
        <div>{{ $train->partenza }}</div>
    @endforeach
    </div>

    <div id="partenza" class="d-flex flex-column ms-5">
        <h4 class="mb-4">Arrivo</h4>
        @foreach ($trains as $train )
        <div>{{ $train->arrivo }}</div>
    @endforeach
    </div>

    <div id="partenza" class="d-flex flex-column ms-5">
        <h4 class="mb-4">Orario Partenza</h4>
        @foreach ($trains as $train )
        <div>{{ $train->orario_partenza }}</div>
    @endforeach
    </div>

    <div id="partenza" class="d-flex flex-column ms-5">
        <h4 class="mb-4">Orario Arrivo</h4>
        @foreach ($trains as $train )
        <div>{{ $train->orario_arrivo }}</div>
    @endforeach
    </div>

    <div id="partenza" class="d-flex flex-column ms-5">
        <h4 class="mb-4">Codice Treno</h4>
        @foreach ($trains as $train )
        <div>{{ $train->codice_treno }}</div>
    @endforeach
    </div>

    <div id="partenza" class="d-flex flex-column ms-5">
        <h4 class="mb-4">Numero Carrozze</h4>
        @foreach ($trains as $train )
        <div>{{ $train->numero_carrozze }}</div>
    @endforeach
    </div>

    <div id="partenza" class="d-flex flex-column ms-5">
        <h4 class="mb-4">In Orario</h4>
        @foreach ($trains as $train )
        <div>{{ $train->in_orario }}</div>


    @endforeach
    </div>

    <div id="partenza" class="d-flex flex-column ms-5">
        <h4 class="mb-4">Cancellato </h4>
        @foreach ($trains as $train )
        <div>{{ $train->cancellato }}</div>


    @endforeach
    </div>

</div>
@endsection




