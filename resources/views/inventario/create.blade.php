<a href="{{ url('inventario')}}">regresar</a>
<form action="{{ url('/inventario')}}" method="post">
    @csrf
    @include('inventario.form',['modo'=>'Crear'])
</form>