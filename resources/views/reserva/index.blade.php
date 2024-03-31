{{-- @extends('layouts.app')

@section('content') --}}
<a href="{{ route('reserva.create') }}">Crear nueva reserva</a>
@auth
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
            @forelse($reservas as $reserva)
                @if (auth()->user()->Nro_doc == $reserva->Nro_doc)
                    <tr>
                        <td>{{ $reserva->Nro_Reserva }}</td>
                        <td>{{ $reserva->Nro_doc }}</td>
                        <td>{{ $reserva->Nro_Habitacion }}</td>
                        <td>{{ $reserva->FechaEntrada }}</td>
                        <td>{{ $reserva->FechaSalida }}</td>
                        <td>{{ $reserva->Estado_Reserva }}</td>
                        <td>{{ $reserva->users ? $reserva->users->Nombre : 'sin nada' }}</td>
                        <td>
                            <a href="{{ route('reserva.show', $reserva->Nro_Reserva) }}">Ver</a>
                            <a href="{{ route('reserva.edit', $reserva->Nro_Reserva) }}">Editar</a>
                            <form action="{{url('/reserva/'.$reserva->Nro_Reserva)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" onclick="return confirm('Quieres eliminar el metodo de pago?')" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td colspan="7">No hay datos</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endauth
{{-- @endsection --}}
