@if ($rol)
    <h1>Detalles de roles</h1>
    <p>Nombre de rol: {{ $roles->Nombre }}</p>
    <p>Permisos: {{ $roles->Permisos }}</p>
    
    <a href="{{ route('role.index') }}">Volver al Listado</a>
@else
    <p>Rol no encontrado</p>
@endif