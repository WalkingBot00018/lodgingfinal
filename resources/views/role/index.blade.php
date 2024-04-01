@extends('layouts.app')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Identificación de Rol</th>
                <th>Nombre del Rol</th>
                <th>Permisos</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rol as $role)
                <tr>
                    <td>{{ $role->ID_rol }}</td>
                    <td>{{ $role->Nombre }}</td>
                    <td>{{ $role->Permisos }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3"><h6>No hay datos</h6></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
