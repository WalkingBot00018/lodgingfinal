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
    <h1>FACTURAS</h1>
<header>  
<body>  
    <seciton class="contenido">
        <article>
            <a href="{{ url('factura/create')}}">Nueva factura</a>
            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Nro_Reserva</td>
                        <td>FechaEmision</td>
                        <td>Monto_Total</td>
                         <td>Id_Metodo_Pago</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facturas as $fac)
                    <tr>
                        <td>{{$fac->Nro_Factura}}</td>
                        <td>{{$fac->FechaEmision}}</td>
                        <td>{{$fac->Monto_Total}}</td>
                        <td>{{$fac->Id_Metodo_Pago}}</td>
                        <td>
                            <a href="{{url('/factura/'.$fac->Nro_Factura.'/edit')}}">Editar
                            <a href="{{url('/factura/' . $fac->Nro_Factura)}}">ver
                                
                            <form action="{{url('/factura/'.$fac->Nro_Factura)}}" method="post">
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


