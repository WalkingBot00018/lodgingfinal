<h1>{{$modo}} Factura</h1>

<label for="Nro_Reserva">Numero de reserva:</label>
<input type="number" value="{{isset($fact->Nro_Reserva)?$fact->Nro_Reserva:''}}"name="Nro_Reserva">
<br>
<label for="FechaEmision">Fecha de emision:</label>
<input type="date" value="{{isset($fact->FechaEmision)?$fact->FechaEmision:''}}"name="FechaEmision">
<br>
<label for="Monto_Total">Monto total</label>
<input type="number" value="{{isset($fact->Monto_Total)?$fact->Monto_Total:''}}"name="Monto_Total">
<br>
<label for="Id_Metodo_Pago">Id de metodo de pago:</label>
<input type="number" value="{{isset($fact->Id_Metodo_Pago)?$fact->Id_Metodo_Pago:''}}" name="Id_Metodo_Pago">
<br>
<input type="submit" value="{{$modo}} datos">