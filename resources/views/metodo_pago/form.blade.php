<h1>{{$modo}} metodo de pago</h1>

<section class="contenedor">
    <article>
        <label for="Tipo">Tipo:</label>
        <input type="text" value="{{isset($MeP->Tipo)?$MeP->Tipo:''}}"name="Tipo">
        <br>
        <input type="submit" value="{{$modo}} datos">
    </article>
</section>