@extends('layouts.app')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-5">
    <h1>Editar servicio</h1>
    <form method="POST" action="{{ route('servicio.update', $servicio->ID_Servicio) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ID_Servicio">Número de Servicio</label>
            <input type="text" name="ID_Servicio" value="{{ $servicio->ID_Servicio }}" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label for="Nombre">Nombre del servicio</label>
            <input type="text" name="Nombre" value="{{ $servicio->Nombre }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <input type="text" name="Descripcion" value="{{ $servicio->Descripcion }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Nro_Habitacion">Numero habitación</label>
            <input type="text" name="Nro_Habitacion" value="{{ $servicio->Nro_Habitacion }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    <a href="{{ route('servicio.show', $servicio->ID_Servicio) }}" class="btn btn-secondary mt-3">Ver Detalles</a>
</div>
