<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    @if ($rol)
        <h1>Detalles de roles</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Nombre de rol:</strong> {{ $rol->Nombre }}</p>
                <p class="card-text"><strong>Permisos:</strong> {{ $rol->Permisos }}</p>
            </div>
        </div>
        <a href="{{ route('role.index') }}" class="btn btn-primary mt-3">Volver al Listado</a>
    @else
        <div class="alert alert-danger mt-3" role="alert">
            <strong>Error:</strong> Rol no encontrado.
        </div>
        <a href="{{ route('role.index') }}" class="btn btn-primary mt-3">Volver al Listado</a>
    @endif
</div>
