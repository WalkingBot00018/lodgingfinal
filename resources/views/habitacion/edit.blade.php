<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Habitacion</title>

  <!-- Enlace a los archivos CSS de Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos CSS personalizados -->
  <style>
    /* Estilos adicionales personalizados */
    .form-group {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1>Editar Habitacion</h1>
    <form method="POST" action="{{ route('habitacion.update', $habitaciones->id) }}">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="Nro_Habitacion">Numero De Habitacion</label>
        <input type="text" name="Nro_Habitacion" value="{{ $habitaciones->Nro_Habitacion }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="Descripcion">Descripcion</label>
        <input type="text" name="Descripcion" value="{{ $habitaciones->Descripcion }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="Precio">Precio</label>
        <input type="text" name="Precio" value="{{ $habitaciones->Precio }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="Disponibilidad">Disponibilidad</label>
        <input type="text" name="Disponibilidad" value="{{ $habitaciones->Disponibilidad }}" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>
      <a href="{{ route('habitacion.show', $habitaciones->id) }}" class="btn btn-secondary">Ver Detalles</a>
    </form>
  </div>

  <!-- Scripts al final del cuerpo del documento -->
  <!-- Enlace a los archivos JS de Bootstrap y jQuery (recomendado) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
