@csrf
<label>Origen:</label>
		<select name="origen" value="{{old('origen',$ruta->origen)}}">
        	@foreach ($lugares as $lugar)
               <option  value="{{$lugar->id}}">{{ $lugar->provincia .' - ' . $lugar->ciudad}}</option>
            @endforeach
        </select><br>

<label>Destino:</label>
		<select name="destino" value="{{old('destino',$ruta->destino)}}">
        	@foreach ($lugares as $lugar)
               <option  value="{{$lugar->id}}">{{ $lugar->provincia .' - ' . $lugar->ciudad}}</option>
            @endforeach
        </select><br>

<label>Combi asignada:</label>
		<select name="combie_id" value="{{old('combie_id',$ruta->combie_id)}}">
        	@foreach ($combis as $combi)
               <option  value="{{$combi->id}}">{{ $combi->patente .' - ' . $combi->model}}</option>
            @endforeach
        </select><br>

<label>Duracion: </label>
	<input type="time" name="duracion" value="{{old('duracion', $ruta->duracion)}}"><br>

<label>Distancia en KMs: </label>
	<input type="number" name="distancia" value="{{old('distancia', $ruta->distancia)}}"><br>