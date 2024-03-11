{{-- @extends('layouts.app')

@section('content') --}}
<a href="{{ route('servicio.create') }}">Crear nuevo servicio</a>

<table>
    <thead>
        <tr>
            <th>Numero reserva</th>
            <th>Nombre de servicio</th>
            <th>Descripcion del servicio</th>
            <th>Numero habitacion</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse ($servicio as $servicio)
            <tr>
                <td>{{ $servicio->ID_Servicio }}</td>
                <td>{{ $servicio->Nombre }}</td>
                <td>{{ $servicio->Descripcion }}</td>
                <td>{{ $servicio->Nro_Habitacion }}</td>
                
                <td>
                    <a href="{{ route('servicio.show', $servicio->ID_Servicio) }}">Ver</a>
                    <a href="{{ route('servicio.edit', $servicio->ID_Servicio) }}">Editar</a>

                    <form method="POST" action="{{ route('servicio.destroy', $servicio->ID_Servicio) }}">
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