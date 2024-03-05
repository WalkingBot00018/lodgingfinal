@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Permisos</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($roles as $roles)
            <tr>
                <td>{{ $roles->Nombre }}</td>
                <td>{{ $roles->Permisos }}</td>
                
                
                <td>
                    <a href="{{ route('billing.shows', $facturacion->id) }}">Ver</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection