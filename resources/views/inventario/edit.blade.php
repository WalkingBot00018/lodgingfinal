<a href="{{ url('inventario')}}">regresar</a>
<form action="{{ url('/inventario/'.$inventario->ID_Inventario)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('inventario.form',['modo'=>'Editar'])
</form> 