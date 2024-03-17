
<form method="post" action="{{ route('habitacion.store') }}" class="my-form">

    @csrf
    
    <div class="form-group">
        <label for="Nro_Habitacion">Numero de Habitacion:</label>
        <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" class="form-control"/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>