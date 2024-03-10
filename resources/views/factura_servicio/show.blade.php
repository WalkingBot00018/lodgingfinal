<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Factura de Servicio</title>
</head>
<body>
    <a href="{{ url('factura_servicio')}}">Regresar</a>
    <h1>Detalles de Factura de Servicio</h1>
    <p>Número de factura servicio: {{ $verFactura_s->Nro_Factura_Servicio }}</p>
    <p>Numero de Reserva: {{ $verFactura_s->Nro_Factura }}</p>
    <p>Fecha de emision: {{ $verFactura_s->ID_Servicio }}</p>
    <p>Total: {{ $verFactura_s->Cantidad }}</p>
  
</body>
</html>