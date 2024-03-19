
<form method="post" action="{{ route('habitacion.store') }}" class="my-form">

    @csrf

    <div class="form-group">
        <label for="Nro_Habitacion">Numero de Habitacion:</label>
        <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" class="form-control"/>


        <label for="Descripcion">Descripcion:</label>
        <input type="text" name="Descripcion" id="Descripcion" class="form-control"/>

        <label for="Precio">Precio:</label>
        <input type="text" name="Precio" id="Precio" class="form-control"/>

        <label for="Disponibilidad">Disponibilidad:</label>
        <input type="text" name="Disponibilidad" id="Disponibilidad" class="form-control"/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>
