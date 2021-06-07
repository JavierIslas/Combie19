@csrf
<label>Nombre: </label><input type="string" name="nombre" value="{{old('nombre', $insumo->nombre)}}"><br>
<label>Tipo: </label>
		<select  name="tipo" value="{{old('tipo',$insumo->tipo)}}" >
			<option value="dulce">Dulce</option>
			<option value="salado">Salado</option>
		</select><br>
<label>Precio: $ </label><input type="number" name="precio" value="{{old('precio', $insumo->precio)}}"><br>
<button>{{$btnText}}</button>