<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Metodo de pago</title>
</head>
<body>
    <header>
        <a href="{{ url('metodo_pago')}}">regresar</a>
    </header>
        <form action="{{ url('/metodo_pago')}}" method="post">
        @csrf
        @include('metodo_pago.form',['modo'=>'Crear'])
        </form>
    </body>
</html>
