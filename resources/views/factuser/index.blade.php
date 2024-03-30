
<a href="{{ route('facturaservicio.create') }}">Crear nueva factura_servivio</a>


    <table>
    <thead>
        <tr>
            <th>Numero de Factura</th>
            <th>ID Servicio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($factura_servicio as $factura)
            <tr>
                <td>{{ $factura->Nro_Factura }}</td>
                <td>{{ $factura->ID_Servicio }}</td>
                <td>{{ $factura->Cantidad }}</td>
                <td>
                    <a href="{{ route('facturaservicio.show', $factura->id) }}">Ver</a>
                    <a href="{{ route('facturaservicio.edit', $factura->id) }}">Editar</a>

                    <form method="POST" action="{{ route('facturaservicio.destroy', $factura->id) }}">
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
