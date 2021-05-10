@csrf
<label>Apellido: </label><input type="string" name="last_name" value="{{old('last_name', $chofer->last_name)}}"><br>
<label>Nombre: </label><input type="string" name="name" value="{{old('name', $chofer->name)}}"><br>
<label>Email: </label><input type="string" name="email" value="{{old('email', $chofer->email)}}"><br>
<label>Telefono: </label><input type="string" name="phone" value="{{old('phone', $chofer->phone)}}"><br>
<label>Contraseña: </label><input type="password" name="password" value="{{old('password', $chofer->password)}}"><br>
<label>Fecha de nacimiento: </label><input type="date" name="birthday" value="{{old('birthday', $chofer->birthday)}}"><br>
<label>Informacion extra: </label><textarea name="extra"> {{old('extra',$chofer->extra)}} </textarea><br>
<button>{{$btnText}}</button>