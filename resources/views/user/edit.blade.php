<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('user.update', $users->ID_Usuario) }}">
    @csrf
    @method('PUT')
    
    <label for="nro_doc">Número de Documento</label>
    <input type="text" name="nro_doc" value="{{ $users->nro_doc }}">
    <label for="nombre_usuario">Nombre de Usuario</label>
    <input type="text" name="nombre_usuario" value="{{ $users->nombre_usuario }}">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ $users->email }}">
    <label for="password">password</label>
    <input type="password" name="password" value="{{ $users->password }}">
    <label for="id_rol">Id rol</label>
    <input type="text" name="id_rol" value="{{ $users->id_rol }}">

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('user.shows', $users->id) }}">Ver Detalles</a>