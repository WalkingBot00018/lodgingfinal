@if ($habitaciones)
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    <h1 class="mb-4">Detalles de la Habitación</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Numero de Habitacion:</strong> {{ $habitaciones->Nro_Habitacion }}</p>
            <p class="card-text"><strong>Descripcion:</strong> {{ $habitaciones->Descripcion }}</p>
            <p class="card-text"><strong>Precio:</strong> {{ $habitaciones->Precio }}</p>
            <p class="card-text"><strong>Disponibilidad:</strong> {{ $habitaciones->Disponibilidad }}</p>
            <a href="{{ route('habitacion.index') }}" class="btn btn-primary">Volver al Listado</a>
        </div>
    </div>
</div>
@else
<div class="container mt-5">
    <div class="alert alert-danger" role="alert">
        <strong>Error:</strong> Habitación no encontrada.
    </div>
    <a href="{{ route('habitacion.index') }}" class="btn btn-primary">Volver al Listado</a>
</div>
@endif
