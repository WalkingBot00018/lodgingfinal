<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios/formularioIndex.css') }}">  
    <title>Document</title>
</head>
<body>
<a class="salir" href="{{url('/home')}}">regresar</a>
    <section class="contenedor">
        <article>
            <section class="Centrar">
                <article>
                    <h1>MODIFICAR USUARIOS</h1>
                    <a class="olo" href="{{ route('user.create') }}">Crear nuevo usuario</a>
                </article>
            </section>
            
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
                        <form method="POST" action="{{ route('user.destroy', $user) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                        </form>
                    </div>
                </div>
            @empty
                <h6>No hay datos</h6>
            @endforelse

        </article>
    </section>
    
</body>
</html>
