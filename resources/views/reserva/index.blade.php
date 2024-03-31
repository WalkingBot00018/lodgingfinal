@extends('layouts.app')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-4">
    <a href="{{ route('reserva.create') }}" class="btn btn-primary mb-3">Crear nueva reserva</a>

    @auth
    <div class="table-responsive">
        <table class="table table-striped">
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
                @forelse($reservas as $reserva)
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
                                <a href="{{ route('reserva.show', $reserva->Nro_Reserva) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('reserva.edit', $reserva->Nro_Reserva) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{url('/reserva/'.$reserva->Nro_Reserva)}}" method="post" class="d-inline">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Quieres eliminar el metodo de pago?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @empty
                    <tr>
                        <td colspan="8">No hay datos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endauth
</div>

