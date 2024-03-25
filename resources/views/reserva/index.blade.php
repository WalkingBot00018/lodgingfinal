@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Reservas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border: 1px solid #dc3545;
            padding: 5px 10px;
            border-radius: 3px;
            text-decoration: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Reservas</h1>
        <a href="{{ route('reserva.create') }}" class="btn btn-primary">Crear nueva reserva</a>
        @auth
        <table>
            <thead>
                <tr>
                    <th>Numero reserva</th>
                    <th>Numero de Documento</th>
                    <th>Numero habitacion</th>
                    <th>Fecha Entrada</th>
                    <th>Fecha Salida</th>
                    <th>Estado de la Reserva</th>
                    <th>Nombre Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                @if (auth()->user()->Nro_doc == $reserva->Nro_doc)
                <tr>
                    <td>{{ $reserva->Nro_Reserva }}</td>
                    <td>{{ $reserva->Nro_doc }}</td>
                    <td>{{ $reserva->Nro_Habitacion }}</td>
                    <td>{{ $reserva->FechaEntrada }}</td>
                    <td>{{ $reserva->FechaSalida }}</td>
                    <td>{{ $reserva->Estado_Reserva }}</td>
                    <td>{{ $reserva->users ? $reserva->users->Nombre : 'sin nada' }}</td>
                    <td>
                        <a href="{{ route('reserva.show', $reserva->Nro_Reserva) }}">Ver</a>
                        <a href="{{ route('reserva.edit', $reserva->Nro_Reserva) }}">Editar</a>
                        <form method="POST" action="{{ route('reserva.destroy', $reserva->Nro_Reserva) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        @endauth
    </div>
</body>
</html>

@endsection
