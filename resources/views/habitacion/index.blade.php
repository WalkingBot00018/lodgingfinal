{{-- @extends('layouts.app')

@section('content') --}}
<a href="{{ route('habitacion.create') }}">Crear nueva habitacion</a>

<table>
    <thead>
        <tr>
            <th>Numero de Habitacion</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($habitaciones as $habitaciones)
            <tr>
                <td>{{ $habitaciones->Nro_Habitacion }}</td>
                
                <td>
                    <a href="{{ route('habitacion.show', $habitaciones->Nro_Habitacion) }}">Ver</a>
                    <a href="{{ route('habitacion.edit', $habitaciones->Nro_Habitacion) }}">Editar</a>

                    <form method="POST" action="{{ route('habitacion.destroy', $habitaciones->Nro_Habitacion) }}">
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