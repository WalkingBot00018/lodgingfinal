<!DOCTYPE html>
<html>
<head>
    <title>Nuestro inventario</title>
</head>
<body>
    <a href="{{ url('inventario')}}">Regresar</a>
    <h1>Inventarios</h1>
    <p>Id del inventario: {{ $inventario->ID_Inventario }}</p>
    <p>Numero de habitacion: {{ $inventario->Nro_Habitacion }}</p>
    <p>Cantidad:{{$inventario->Cantidad}}</p>
    <p>Nombre del articulo: {{ $inventario->Nombre}}</p>
</body>
</html>