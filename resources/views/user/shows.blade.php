@if ($user)
    <h1>USER DETAILS</h1>
    <p>Numero de Documento: {{ $user->Nro_doc }}</p>
    <p>Nombre Usuario: {{ $user->Nombre }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Password: {{ $user->password }}</p>
    <p>Password: {{ $user->Telefono }}</p>
    <p>Password: {{ $user->Estado }}</p>
    <p>Id rol: {{ $user->ID_rol }}</p>
    <a href="{{ route('user.index') }}">Volver al Listado</a>
@else
    <p>Usuario no encontrado</p>
@endif