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
        @forelse ($rol as $roles)
            <tr>
                <td>{{ $roles->Nombre }}</td>
                <td>{{ $roles->Permisos }}</td>
                
                
                <td>
                    <a href="{{ route('role.show', $roles->ID_rol) }}">Ver</a>
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