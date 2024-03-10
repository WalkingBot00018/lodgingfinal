<a href="{{ url('factura_servicio')}}">regresar</a>
<form action="{{ url('/factura_servicio')}}" method="post">
    @csrf
    @include('factura_servicio.form',['modo'=>'Crear'])
</form>