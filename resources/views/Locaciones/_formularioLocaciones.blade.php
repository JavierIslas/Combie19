@csrf
<label>Ciudad: </label><input type="string" name="ciudad" value="{{old('last_name', $locacion->ciudad)}}"><br>
<label>Provincia: </label><input type="string" name="provincia" value="{{old('name', $locacion->provincia)}}"><br>
<button>{{$btnText}}</button>