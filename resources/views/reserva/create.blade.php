@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Reserva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Reserva</h1>

        <form method="post" action="{{ route('reserva.store') }}" class="my-form">
            @csrf

            <label for="Nro_doc">Numero de Documento:</label>
            <input type="text" name="Nro_doc" id="Nro_doc" placeholder="Ingrese el numero de documento">

            <label for="Nro_Habitacion">Numero de Habitacion:</label>
            <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" placeholder="Ingrese el numero de habitacion">

            <label for="FechaEntrada">Fecha de entrada:</label>
            <input type="date" name="FechaEntrada" id="FechaEntrada">

            <label for="FechaSalida">Fecha de salida:</label>
            <input type="date" name="FechaSalida" id="FechaSalida">

            <!-- Input oculto para el Estado_Reserva -->
            <input name="Estado_Reserva" id="Estado_Reserva" value="Reservado" hidden>

            <input type="submit" value="Crear Reserva">
        </form>
    </div>
</body>
</html>

@endsection
