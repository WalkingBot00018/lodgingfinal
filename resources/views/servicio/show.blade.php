<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    @if ($servicio)
        <h1>Detalles de los servicios</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Id del servicio:</strong> {{ $servicio->ID_Servicio }}</p>
                <p class="card-text"><strong>Nombre del servicio:</strong> {{ $servicio->Nombre }}</p>
                <p class="card-text"><strong>Descripcion:</strong> {{ $servicio->Descripcion }}</p>
                <p class="card-text"><strong>Numero de habitacion:</strong> {{ $servicio->Nro_Habitacion }}</p>
            </div>
        </div>
        <a href="{{ route('servicio.index') }}" class="btn btn-primary mt-3">Volver al Listado</a>
    @else
        <div class="alert alert-danger mt-3" role="alert">
            <strong>Error:</strong> Servicio no encontrado.
        </div>
        <a href="{{ route('servicio.index') }}" class="btn btn-primary mt-3">Volver al Listado</a>
    @endif
</div>
