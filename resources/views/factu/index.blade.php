
<a href="{{ route('factu.create') }}">Crear nueva factura</a>


    <table>
    <thead>
        <tr>
            <th>Numero de Factura</th>
            <th>Numero de Reserva</th>
            <th>Fecha Emision</th>
            <th>Monto Total</th>
            <th>Id Metodo Pago</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($factura as $factura)
            <tr>
                <td>{{ $factura->Nro_Factura }}</td>
                <td>{{ $factura->Nro_Reserva }}</td>
                <td>{{ $factura->FechaEmision }}</td>
                <td>{{ $factura->Monto_Total }}</td>
                <td>{{ $factura->Id_Metodo_Pago }}</td>
                
                <td>
                    <a href="{{ route('factu.show', $factura->id) }}">Ver</a>
                    <a href="{{ route('factu.edit', $factura->id) }}">Editar</a>

                    <form method="POST" action="{{ route('factu.destroy', $factura->id) }}">
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