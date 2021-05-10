@csrf
<label>Origen: </label><input type="number" name="origen" value="{{old('last_name', $ruta->origen)}}"><br>
<label>Destino: </label><input type="number" name="destino" value="{{old('name', $ruta->destino)}}"><br>
<label>Combi asignada: </label><input type="number" name="combie_id" value="{{old('last_name', $ruta->combie_id)}}"><br>
<label>Duracion: </label><input type="time" name="duracion" value="{{old('last_name', $ruta->duracion)}}"><br>
<label>Distancia en KMs: </label><input type="number" name="distancia" value="{{old('last_name', $ruta->distancia)}}"><br>
<button>{{$btnText}}</button>