<a href="{{ url('metodo_pago')}}">regresar</a>
<form action="{{ url('/metodo_pago/'. $MeP->Id_Metodo_Pago) }}" method="post">
{{ url('/inventario/'.$inventario->ID_Inventario)}}
    @csrf
    {{method_field('PATCH')}}
    @include('metodo_pago.form',['modo'=>'Editar'])
</form> 