<a href="{{ url('factura')}}">regresar</a>
<form action="{{ url('/factura')}}" method="post">
    @csrf
    @include('factura.form',['modo'=>'Crear'])
</form>