<a href="{{ url('factura_servicio')}}">regresar</a>
<form action="{{ url('/factura_servicio/'.$factura_s->Nro_Factura_Servicio)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('factura_servicio.form',['modo'=>'Editar'])
</form> 