<a href="{{url('inventario/create')}}">Agregar nuevo articulo</a>
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Nro_Habitacion</td>
            <td>Cantidad</td>
            <td>Nombre</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($inventario as $inventario)
        <tr>
        <td>{{$inventario->ID_Inventario}}</td>
        <td>{{$inventario->Nro_Habitacion}}</td>
        <td>{{$inventario->Cantidad}}</td>
        <td>{{$inventario->Nombre}}</td>
        <td>
            <a href="{{url('/inventario/'.$inventario->ID_Inventario.'/edit')}}">Editar</a>
            <a href="{{url('/inventario/'.$inventario->ID_Inventario)}}">Ver</a>
            <form action="{{url('/inventario/'.$inventario->ID_Inventario)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres eliminar este articulo?')" value="Eliminar">
            </form>
        </td>
        </tr>
        
        @endforeach
        </tbody>
        <tfoot></tfoot>
</table>