<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Factura</title>
</head>
<body>
    <header>
        <a href="{{ url('factura')}}">regresar</a>
    </header>
        <form action="{{ url('/factura')}}" method="post">
        @csrf
        @include('factura.form',['modo'=>'Crear'])
        </form>
    </body>
</html>

