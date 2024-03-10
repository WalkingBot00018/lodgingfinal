@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<header>
    <h1>FACTURAS SERVICIOS</h1>
<header>  
<body>  
    <seciton class="contenido">
        <article>
            <a href="{{ url('factura_servicio/create')}}">Nueva factura de servicio</a>
            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Nro_Factura</td>
                        <td>ID_Servicio</td>
                        <td>Cantidad</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($factura_s as $fac_s)
                    <tr>
                        <td>{{$fac_s->Nro_Factura_Servicio}}</td>
                        <td>{{$fac_s->Nro_Factura}}</td>
                        <td>{{$fac_s->ID_Servicio}}</td>
                        <td>{{$fac_s->Cantidad}}</td>
                        <td>
                            <a href="{{url('/factura_servicio/'.$fac_s->Nro_Factura_Servicio.'/edit')}}">Editar
                            <a href="{{url('/factura_servicio/'.$fac_s->Nro_Factura_Servicio)}}">Ver

                            <form action="{{url('/factura_servicio/'.$fac_s->Nro_Factura_Servicio)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot></tfoot>
            </table>
        </article>
    </section>
</body>
</html>