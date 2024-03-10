<h1>{{$modo}} Factura servicios</h1>

<label for="Nro_Factura">Numero de factura:</label>
<input type="number" value="{{isset($factura_s->Nro_Factura)?$factura_s->Nro_Factura:''}}"name="Nro_Factura">
<br>
<label for="ID_Servicio">Id del servicio:</label>
<input type="number" value="{{isset($factura_s->ID_Servicio)?$factura_s->ID_Servicio:''}}"name="ID_Servicio">
<br>
<label for="Cantidad">Cantidad:</label>
<input type="number" value="{{isset($factura_s->Cantidad)?$factura_s->Cantidad:''}}"name="Cantidad">
<br>
<input type="submit" value="{{$modo}} datos">