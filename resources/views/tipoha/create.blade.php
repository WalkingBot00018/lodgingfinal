<form method="post" action="{{ route('tipoha.store') }}" class="my-form">
    @csrf
    
    <div class="form-group">
        <label for="Nro_Habitacion">Numero de Habitacion:</label>
        <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" class="form-control"/>
        @error('Nro_Habitacion')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="Descripcion">Descripcion:</label>
        <input type="text" name="Descripcion" id="Descripcion" class="form-control"/>
        @error('Descripcion')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="Precio">Precio:</label>
        <input type="text" name="Precio" id="Precio" class="form-control"/>
        @error('Precio')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="Disponibilidad">Disponibilidad:</label>
        <input type="text" name="Disponibilidad" id="Disponibilidad" class="form-control"/>
        @error('Disponibilidad')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>
</form>
