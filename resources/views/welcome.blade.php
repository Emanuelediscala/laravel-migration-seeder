@extends('layouts.app')

@section('content')
<div class="container my-3">

    <h1 class="m-auto">Ecco tutti i treni del giorno:</h1>
    @foreach ($trains as $train) 
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Azienda</h3>
            <p>{{ $train->azienda }}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Stazione di partenza</h3>
            <p>{{ $train->Stazione_di_partenza }}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Stazione di arrivo</h3>
            <p>{{ $train->Stazione_di_arrivo }}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Orario di partenza</h3>
            <p>{{ $train->Orario_di_partenza }}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Orario di arrivo</h3>
            <p>{{ $train->Orario_di_partenza }}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">data di partenza</h3>
            <p>{{ $train->data_di_partenza }}</p>
        </div>
    </div>
    @endforeach



</div>
@endsection