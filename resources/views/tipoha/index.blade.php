
<a href="{{ route('tipo_habitacion.create') }}">Crear nuevo tipo de  habitacion</a>


    <table>
    <thead>
        <tr>
            <th>Numero de Habitacion</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Disponibilidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($tipo_hab as $tipo_habitacion)
            <tr>
                <td>{{ $tipo_habitacion->Nro_habitacion }}</td>
                <td>{{ $tipo_habitacion->Descripcion }}</td>
                <td>{{ $tipo_habitacion->Precio }}</td>
                <td>{{ $tipo_habitacion->Disponibilidad }}</td>
                
                <td>
                    <a href="{{ route('tipo_habitacion.show', $tipo_habitacion->id) }}">Ver</a>
                    <a href="{{ route('tipo_habitacion.edit', $tipo_habitacion->id) }}">Editar</a>

                    <form method="POST" action="{{ route('tipo_habitacion.destroy', $tipo_habitacion->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3"><h6>No hay datos</h6></td>
            </tr>
        @endforelse
    </tbody>
</table>
