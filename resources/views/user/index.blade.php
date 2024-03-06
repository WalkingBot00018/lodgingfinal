<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">  
<a class="olo" href="{{ route('user.create') }}">Create new user</a>
@forelse ($users as $user)
    <div class="user-item">
        <span>{{ $user->Nro_doc }}</span>
        <span>{{ $user->Nombre }}</span>
        <span>{{ $user->Apellido }}</span>
        <span>{{ $user->email }}</span>
        <span>{{ $user->Telefono }}</span>
        <span>{{ $user->Estado }}</span>
        <span>{{ $user->rol ? $user->rol->Nombre : 'sin rol' }}</span>
        <div class="user-actions">
            <a href="{{ route('user.shows', $user->ID_Usuario) }}">Ver</a>
            <a href="{{ route('user.edit', $user->ID_Usuario) }}">Editar</a>
            <form method="POST" action="{{ route('user.destroy', $user->ID_usuario) }}">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
            </form>
        </div>
    </div>
@empty
    <h6>No hay datos</h6>
@endforelse