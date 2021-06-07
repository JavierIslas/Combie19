<?php
use App\Models\Locacion;
use App\Models\Ruta;
use App\Models\Combi;
?>

@csrf
<label>Fecha: </label>
<input type="Date" name="fecha" value="{{old('fecha', $viaje->fecha)}}"><br>

<label>Horario Salida: </label>
<input type="time" name="horario_Salida" value="{{old('horario_Salida', $viaje->horario_Salida)}}"><br>

<label>Horario Llegada: </label>
<input type="time" name="horario_Llegada" value="{{old('horario_Llegada', $viaje->horario_Llegada)}}"><br>

<label>Ruta: </label>
<select name="ruta_id" value="{{old('ruta_id',$viaje->ruta_id)}}">
        	@foreach ($rutas as $ruta)

               <option value="{{$ruta->id}}"@if (old('ruta_id',$viaje->ruta_id) == "$ruta->id") {{ 'selected' }} @endif >{{'Origen: '. $LocacionOrigen = Locacion::find($ruta->origen)->ciudad .'('.$LocacionOrigen = Locacion::find($ruta->origen)->provincia .')'.' -  Destino: '. $LocacionOrigen = Locacion::find($ruta->destino)->ciudad.'('.$LocacionOrigen = Locacion::find($ruta->origen)->provincia .')'}}</option>
            @endforeach
        </select><br>

<label>Precio:  $</label>
<input type="number" name="precio" value="{{old('precio', $viaje->precio)}}"><br>

<button>{{$btnText}}</button>