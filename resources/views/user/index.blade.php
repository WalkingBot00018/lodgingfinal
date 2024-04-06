<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios/formularioIndex.css') }}">  
    <title>Usuarios</title>
</head>
<body>
    <a class="salir" href="{{url('/home')}}">Regresar</a>
    <section class="contenedor">
        <article>
            <section class="Centrar">
                <article>
                    <h1>MODIFICAR USUARIOS</h1>
                    <a class="olo" href="{{ route('usuarios.create') }}">Crear nuevo usuario</a>
                    <h1>
                        BUSCADOR DE USUARIOS
                        {{Form::open(['route' => 'usuarios.index','method'=>'GET','class'=> 'form-inline pull-right'])}}
                            <section class="formulario">
                                {{Form::number('Nro_doc', request('Nro_doc') ,['class' => 'form-control', 'placeholder' => 'Numero de documento:'])}}
                            </section>
                            <section class="formulario">
                                {{Form::text('Nombre', request('Nombre'),['class' => 'form-control', 'placeholder' => 'Nombre del usuario:'])}}
                            </section>
                            <section class="formulario">
                                <button type="submit">Buscar</button>
                            </section>
                        {{Form::close()}}
                    </h1>
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
                        <a href="{{ url('/usuarios/'. $user->ID_Usuario.'/edit') }}">Editar</a>
                        <a href="{{ url('/usuarios/'. $user->ID_Usuario) }}">Ver</a>
                    
                        <form method="POST" action="{{ route('usuarios.destroy', $user) }}">
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
