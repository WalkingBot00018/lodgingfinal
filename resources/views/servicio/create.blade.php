<!-- Agrega el enlace al archivo CSS de Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<a href="{{ route('servicio.index') }}" class="btn btn-secondary mb-3">REGRESAR</a>

<div class="container mt-5">
    <form method="post" action="{{ route('servicio.store') }}" class="my-form">
        @csrf

        <div class="form-group">
            <label for="Nombre">Nombre del servicio</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control">
        </div>

        <div class="form-group">
            <label for="Descripcion">Descripción del servicio</label>
            <input type="text" name="Descripcion" id="Descripcion" class="form-control">
        </div>

        <div class="form-group">
            <label for="Nro_Habitacion">Número de la habitación</label>
            <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" class="form-control">
        </div>

        <input type="submit" value="Create" class="btn btn-primary">
    </form>
</div>


