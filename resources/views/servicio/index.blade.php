{{-- @extends('layouts.app')

@section('content') --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    <a href="{{ route('servicio.create') }}" class="btn btn-primary mb-3">Crear nuevo servicio</a>

    <table class="table">
        <thead>
            <tr>
                <th>Numero reserva</th>
                <th>Nombre de servicio</th>
                <th>Descripcion del servicio</th>
                <th>Numero habitacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($servicio as $serv)
                <tr>
                    <td>{{ $serv->ID_Servicio }}</td>
                    <td>{{ $serv->Nombre }}</td>
                    <td>{{ $serv->Descripcion }}</td>
                    <td>{{ $serv->Nro_Habitacion }}</td>
                    <td>
                        <a href="{{ route('servicio.show', $serv->ID_Servicio) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('servicio.edit', $serv->ID_Servicio) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="{{ route('servicio.destroy', $serv->ID_Servicio) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay datos</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
