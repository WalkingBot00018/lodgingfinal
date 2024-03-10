<a href="{{ url('factura')}}">regresar</a>
<form action="{{ url('/factura/'.$fact->Nro_Factura)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('factura.form',['modo'=>'Editar'])
</form> 