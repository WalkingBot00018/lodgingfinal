
<a href="{{ route('habitacion.create') }}">Crear nueva habitacion</a>


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
        @forelse ($habitacion as $habitaciones)
            <tr>
                <td>{{ $habitaciones->Nro_Habitacion }}</td>
                <td>{{ $habitaciones->Descripcion }}</td>
                <td>{{ $habitaciones->Precio }}</td>
                <td>{{ $habitaciones->Disponibilidad }}</td>
                <td>
                    <a href="{{ route('habitacion.show', $habitaciones->id) }}">Ver</a>
                    <a href="{{ route('habitacion.edit', $habitaciones->id) }}">Editar</a>

                    <form method="POST" action="{{ route('habitacion.destroy', $habitaciones->id) }}">
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
