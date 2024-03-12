@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL LODGING
  </title>
  <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
</head>
<script src="/js/main.js"></script>
<script src="/js/filtros.js"></script>
<script src="/js/alojamientos.js"></script>
<body>
  <header>
    <section class="contenido">
        <article>
            <h1>LODGING</h1>
            <h2>Reservas</h2>
        </article>
    </section>
    <nav>
        <menu>
            <a href="{{ route('user.create') }}">Crear cuenta</a>
            <a href="{{ route('login') }}">Iniciar sesión</a>
            <a href="#">Misión...</a>
            <a href="#">Visión...</a>
            <a href="#">Quienes somos...</a>
        </menu>
    </nav>
  </header>
  <main>
    <section class="hero">
      <img class="inicio" src="{{ asset('image/houseini.jpg') }}" alt="Imagen de fondo">
      <div class="texto-hero">
        <h3>Reserva tu alojamiento en LODGING</h3>
        <p>Disfruta de las mejores experiencias </p>
        <a href="#">Ver alojamientos</a>
      </div>
    </section>
    <section class="seccion-filtros">
      <form action="#">
        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino">
        <label for="fecha-llegada">Fecha de llegada:</label>
        <input type="date" id="fecha-llegada" name="fecha-llegada">
        <label for="fecha-salida">Fecha de salida:</label>
        <input type="date" id="fecha-salida" name="fecha-salida">
        <label for="numero-personas">Número de personas:</label>
        <input type="number" id="numero-personas" name="numero-personas">
        <button type="submit">Buscar</button>
      </form>
    </section>
    <section class="seccion-alojamientos">
      <h2>Alojamientos disponibles</h2>
      <div class="alojamiento">
        <img src="{{ asset('image/alojamiento1.jpg') }}" alt="Imagen del alojamiento">
        <h3>Alojamiento 1</h3>
        <p>Descripción del alojamiento 1.</p>
        <a href="{{ route('login') }}">reservar</a>
      </div>
      <div class="alojamiento">
        <img src="{{ asset('image/alojamiento2.jpg') }}" alt="Imagen del alojamiento">
        <h3>Alojamiento 2</h3>
        <p>Descripción del alojamiento 2.</p>
        <a href="#">Ver más</a>
      </div>
      <div class="alojamiento">
        <img src="{{ asset('image/alojamiento3.jpg') }}" alt="Imagen del alojamiento">
        <h3>Alojamiento 3</h3>
        <p>Descripción del alojamiento 3.</p>
        <a href="#">Ver más</a>
      </div>
    </section>
  </main>
  <footer>
    <p>Copyright &copy; 2024 Romario, Luz, Ruben, Sagrario</p>
  </footer>
</body>
</html>

@endsection
