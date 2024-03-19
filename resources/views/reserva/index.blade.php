{{-- @extends('layouts.app')

@section('content') --}}
    <a href="{{ route('reserva.create') }}">Crear nueva reserva</a>

    <table>
        <thead>
            <tr>
                <th>Numero reserva</th>
                <th>Numero de Documento</th>
                <th>Numero habitacion</th>
                <th>Fecha Entrada</th>
                <th>Fecha Salida</th>
                <th>Estado de la Reserva</th>
                <th>Nombre Usuario</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reservas as $reservas)
                <tr>
                    <td>{{ $reservas->Nro_Reserva }}</td>
                    <td>{{ $reservas->Nro_doc }}</td>
                    <td>{{ $reservas->Nro_Habitacion }}</td>
                    <td>{{ $reservas->FechaEntrada }}</td>
                    <td>{{ $reservas->FechaSalida }}</td>
                    <td>{{ $reservas->Estado_Reserva }}</td>
                    <td>{{ $reservas->users ? $reservas->users->Nombre : 'sin nada' }}</td>
                    <td>


                        <a href="{{ route('reserva.show', $reservas->Nro_Reserva) }}">Ver</a>

                        
                        <a href="{{ route('reserva.edit', $reservas->Nro_Reserva) }}">Editar</a>

                        <form action="{{url('/reserva/'.$reservas->Nro_Reserva)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" onclick="return confirm('Quieres eliminar el metodo de pago?')" value="Eliminar">
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

{{-- @endsection --}}
