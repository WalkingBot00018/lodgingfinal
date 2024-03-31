<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Título de tu página</title>

  <!-- Enlace a los archivos CSS de Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Opcional: Si quieres usar íconos de FontAwesome (opcional) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

  <!-- Estilos CSS personalizados -->
  <style>
    /* Puedes agregar estilos personalizados aquí */
  </style>
</head>
<body>

<!-- Tu formulario con clases de Bootstrap -->
<div class="container mt-5">
  <form method="post" action="{{ route('habitacion.store') }}" class="my-form">
    @csrf
    <div class="form-group">
      <label for="Nro_Habitacion">Numero de Habitacion:</label>
      <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" class="form-control">

      <label for="Descripcion">Descripcion:</label>
      <input type="text" name="Descripcion" id="Descripcion" class="form-control">

      <label for="Precio">Precio:</label>
      <input type="text" name="Precio" id="Precio" class="form-control">

      <label for="Disponibilidad">Disponibilidad:</label>
      <input type="text" name="Disponibilidad" id="Disponibilidad" class="form-control">
    </div>
    <input type="submit" value="Create" class="btn btn-primary">
  </form>
</div>

<!-- Scripts al final del cuerpo del documento -->
<!-- Enlace a los archivos JS de Bootstrap y jQuery (recomendado) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
