<?php
use App\Models\Ruta;
use App\Models\Locacion;
use App\Models\Chofer;

?>
@extends('layouts.app')

@section('title', 'ChoferesViajes')

@section('content')
	<h1>Mis viajes</h1>
	<ul>
		@forelse($viajes as $viajeItem)
		    <?php
			$ruta=Ruta::find($viajeItem->ruta_id);
			$origen= Locacion::find($ruta->origen);
			$destino=Locacion::find($ruta->destino);
			$choferItem= Chofer::find($ruta->combie_id);
			?>
			 @if (auth()->user()->email == $choferItem->email )
                <li> 
                <a href="{{ route('administracionViajesChofer.show', $viajeItem->id) }}">{{ $origen->ciudad }} -  {{ $destino->ciudad }} - {{$viajeItem->fecha}}</a> 
                </li> 
             @endif			
		@empty
			<li>No tiene viajes</li>
		@endforelse
	</ul>
@endsection