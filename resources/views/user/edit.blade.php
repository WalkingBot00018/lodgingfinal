<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('user.update', $users->ID_Usuario) }}">
    @csrf
    @method('PUT')
    
    <label for="Nro_doc">Número de Documento</label>
    <input type="text" name="Nro_doc" value="{{ $users->Nro_doc }}">
    <label for="Nombre">Nombre de Usuario</label>
    <input type="text" name="Nombre" value="{{ $users->Nombre }}">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ $users->email }}">
    <label for="password">password</label>
    <input type="password" name="password" value="{{ $users->password }}">
    <label for="id_rol">Id rol</label>
    <label for="Telefono">Número DE TELEFONO</label>
    <input type="text" name="Telefono" value="{{ $users->Telefono }}">
    <input type="text" name="ID_rol" value="{{ $users->ID_rol }}">

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('user.shows', $users->ID_Usuario) }}">Ver Detalles</a>