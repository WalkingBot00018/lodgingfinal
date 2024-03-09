{{-- @extends('layouts.app')

@section('content') --}}
<a href="{{ route('habitacion.create') }}">Crear nueva habitacion</a>

<table>
    <thead>
        <tr>
            <th>Numero de Habitacion</th>
            <th>Id de Tipo de habitación</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($habitacion as $habitacion)
            <tr>
                <td>{{ $habitacion->Nro_Habitacion }}</td>
                <td>{{ $habitacion->Id_Tipo_Habitacion }}</td>
                <td>{{ $habitacion->tipo_habitacion ? $habitacion->tipo_habitacion->Descripcion : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('habitacion.shows', $habitacion->Nro_Habitacion) }}">Ver</a>
                    <a href="{{ route('habitacion.edit', $habitacion->Nro_Habitacion) }}">Editar</a>

                    <form method="POST" action="{{ route('habitacion.destroy', $habitacion->Nro_Habitacion) }}">
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