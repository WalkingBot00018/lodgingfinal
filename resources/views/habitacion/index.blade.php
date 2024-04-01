@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    <a href="{{ route('habitacion.create') }}" class="btn btn-primary mb-3">Crear nueva habitación</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Numero de Habitacion</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($habitacion as $habitaciones)
                <tr>
                    <td>{{ $habitaciones->Nro_Habitacion }}</td>
                    <td>{{ $habitaciones->Descripcion }}</td>
                    <td>{{ $habitaciones->Precio }}</td>
                    <td>{{ $habitaciones->Disponibilidad }}</td>
                    <td>
                        <a href="{{ route('habitacion.show', $habitaciones->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('habitacion.edit', $habitaciones->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="{{ route('habitacion.destroy', $habitaciones->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"><h6>No hay datos</h6></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
