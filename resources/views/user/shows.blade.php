<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/formularios/formularioShow.css')}}">
    <title>Ver usuarios</title>
</head>
<body>
    <a class="regresar2" href="{{ route('user.edit', ['user' => $user->ID_Usuario]) }}">Ir a la edición</a>
    <a class="regresar2" href="{{ route('user.index') }}">Volver al listado</a>
    <section class="body2">
        <article>   
        <section class="contenedor2">
        <article>
            @if ($user)
                <h1>DETALLE</h1>
                <p>Numero de Documento: {{ $user->Nro_doc }}</p>
                <p>Nombre Usuario: {{ $user->Nombre }}</p>
                <p>Email: {{ $user->email }}</p>
                <p>Password: {{ $user->password }}</p>
                <p>Password: {{ $user->Telefono }}</p>
                <p>Password: {{ $user->Estado }}</p>
                <p>Id rol: {{ $user->ID_rol }}</p>
            @else
                <p>Usuario no encontrado</p>
            @endif
        </article>
    </section>    

        </article>
    </section>
    
    
</body>
</html>
