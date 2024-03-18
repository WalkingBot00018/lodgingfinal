<!DOCTYPE html>
<html>
<head>
    <title>Metodo de pago</title>
</head>
<body>
    <a href="{{ url('metodo_pago')}}">Regresar</a>
    <h1>Informacion del metodo de pago</h1>
    <p>Id del metodo: {{ $verMetodoPago->Id_Metodo_Pago }}</p>
    <p>Nombre: {{ $verMetodoPago->Tipo }}</p>
</body>
</html>