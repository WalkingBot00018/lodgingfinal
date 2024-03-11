{{-- @extends('layouts.app')

@section('content') --}}
<a href="{{ route('tipo_habitacion.create') }}">Crear nueva habitacion</a>

<table>
    <thead>
        <tr>
            <th>Id de Tipo de habitación</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Disponibilidad</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse ($tipo_habitacion as $tipo_habitacion)
            <tr>
                <td>{{ $tipo_habitacion->Id_Tipo_Habitacion }}</td>
                <td>{{ $tipo_habitacion->Descripcion }}</td>
                <td>{{ $tipo_habitacion->Precio }}</td>
                <td>{{ $tipo_habitacion->Disponibilidad }}</td>
            
                    <a href="{{ route('tipo_habitacion.show', $tipo_habitacion->Id_Tipo_Habitacion) }}">Ver</a>
                    <a href="{{ route('tipo_habitacion.edit', $tipo_habitacion->Id_Tipo_Habitacion) }}">Editar</a>

                    <form method="POST" action="{{ route('tipo_habitacion.destroy', $tipo_habitacion->Id_Tipo_Habitacion) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                        </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>