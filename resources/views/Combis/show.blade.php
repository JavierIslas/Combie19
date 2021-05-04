@extends('Layout')

@section('title','Patente :'. $combi->patente)

@section('content')
<div>
<p>{{ 'Patente: '.$combi -> patente}}</p>
<p>{{ 'Modelo: '.$combi -> model}}</p>
<p>{{ 'Cantidad de asientos: '.$combi -> asientos}}</p>
<p>{{ 'Chofer: '.$combi -> chofer_id}}</p>
<p>{{ 'Dada de alta el: '.$combi -> created_at}}</p>
<p>{{ 'Ultima actualizacion: '.$combi -> updated_at}}</p>
</div>
@endsection