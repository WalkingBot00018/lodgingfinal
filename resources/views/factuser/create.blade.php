
<form method="post" action="{{ route('factuser.store') }}" class="my-form">

    @csrf
    
    <div class="form-group">
        <label for="Nro_Factura">Numero de factura:</label>
        <input type="text" name="Nro_Factura" id="Nro_Factura" class="form-control"/>

        <label for="ID_Servicioa">ID Servicio:</label>
        <input type="text" name="ID_Servicio" id="ID_Servicio" class="form-control"/>

        <label for="Cantidad">Cantidad:</label>
        <input type="text" name="Cantidad" id="Cantidad" class="form-control"/>

    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>