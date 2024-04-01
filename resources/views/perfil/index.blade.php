<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <link rel="stylesheet" href="/css/perfil.css">
</head>
<body>
    <a href="{{url('/home')}}">Regresar</a>
    <section class="contenido">
        <article>
            <h1>Perfil de Usuario</h1>
            <p>Bienvenido, {{$usuario->Nombre}} {{$usuario->Apellido}}</p>    
            <ul>
                <li class="lista">Numero de documento: {{$usuario->Nro_doc}}</li>
                <li class="lista">Nombre: {{$usuario->Nombre}}</li>
                <li class="lista">Correo electronico: {{$usuario->email}}</li>
            </ul>
        </article>
    </section>
    
</body>
</html>