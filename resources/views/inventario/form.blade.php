<h1>{{$modo}} inventario</h1>
<label for="Nro_Habitacion">Numero de habitacion:</label>
<input type="number" value="{{isset($inventario->Nro_Habitacion)?$inventario->Nro_Habitacion:''}}"name="Nro_Habitacion">
<br>
<label for="Cantidad">Cantidad:</label>
<input type="number" value="{{isset($inventario->Cantidad)?$inventario->Cantidad:''}}"name="Cantidad">
<br>
<label for="Nombre">Nombre:</label>
<input type="text" value="{{isset($inventario->Nombre)?$inventario->Nombre:''}}"name="Nombre">
<br>
<input type="submit" value="{{$modo}} datos">