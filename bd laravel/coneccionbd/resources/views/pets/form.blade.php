<lavel  for="name">Nombre: </lavel>
<input type="text" name="name" id="" value="{{ isset($pet->name)?$pet->name:''}}">
<label for="age">edad</label>
<input type="number" name="age" id="" value="{{isset($pet->age)?$pet->age:''}}">
<button type="submit"> Guardar</button>