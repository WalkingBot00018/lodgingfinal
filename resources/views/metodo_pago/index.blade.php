@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo pago</title>
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<header>
    <h1>Metodo de pago</h1>
</header>  
<body>  
    <section class="contenido">
        <article>
            <a href="{{ url('metodo_pago/create')}}">Agregar metodo de pago</a>
            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Tipo</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($metodopago as $mp)
                    <tr>
                        <td>{{$mp->Id_Metodo_Pago}}</td>
                        <td>{{$mp->Tipo}}</td>
                        <td>
                            <a href="{{url('/metodo_pago/'.$mp->Id_Metodo_Pago.'/edit')}}">Editar</a>
                            <a href="{{url('/metodo_pago/' . $mp->Id_Metodo_Pago)}}">ver</a>
                                
                            <form action="{{url('/metodo_pago/'.$mp->Id_Metodo_Pago)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" onclick="return confirm('¿Quieres eliminar el metodo de pago?')" value="Eliminar">
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