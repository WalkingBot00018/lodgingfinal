<h1>Busqueda</h1>

@forelse($users as $u)
<section class="user-item">
    <span>{{ $u->Nro_doc}}</span>    
    <span>{{ $u->Nombre}}</span>    
    <span>{{ $u->Apellido}}</span>    
    <span>{{ $u->Telefono}}</span>    
    <span>{{ $u->Estado}}</span>    
    <span>{{ $u->ID_rol ? $u->rol->Nombre : 'sin rol'}}</span>    
    <section class="user-actions">
        <a href="{{ url('/usuarios/'. $user->ID_Usuario.'/edit') }}">Editar</a>
        <a href="{{ url('/usuarios/'. $user->ID_Usuario) }}">Ver</a>
            
        <form method="POST" action="{{ route('usuarios.destroy', $user) }}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
        </form>
    </section>   
</section>
@empty
<h5>No se ecnontraron resultados</h5>
@endforelse