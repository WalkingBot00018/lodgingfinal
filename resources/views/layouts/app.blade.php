<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    


    <title> @yield('title', 'Sistema Hotelero Lodging') </title>

</head>
<body>
    <main>
        @auth
            <!-- <p>Bienvenido {{ auth()->user()->Nombre }}</p> -->
            @if (auth()->user()->ID_rol == 1)
                <nav class="navbar navbar-custom navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <div class="container-fluid">
                        <a href="{{ asset('/') }}" class="logo2">
                            <img src="{{ asset('image/LOGO3.png') }}" alt="LOGO" class="logo-imgs">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="{{route('perfil.index')}}">Mi cuenta</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('rol.index') }}">Gestionar roles</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('reserva.index') }}">Gestionar reservas</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('habitacion.index') }}">Gestionar habitaciones</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('servicio.index') }}">Gestionar servicios</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('factura.create') }}">Gestionar facturas</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('usuarios.index') }}">Gestionar usuarios</a></li>
                                <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link nav-link">Cerrar sesión</button>
                                </form> 
                            </ul>
                        </div>
                    </div>
                </nav>

                <main role="main" class="container">
                    
                    @yield("content")
                </main>



                @elseif (auth()->user()->ID_rol == 2)
                    <nav>
                        <p>Rol: Recepsionista</p>
                        <menu>
                            <a href="{{ route('reserva.create') }}"> reservar habitacion elegida</a>
                            <a href="{{ route('reserva.store') }}">ver tus reservas</a>
                        </menu>
                    </nav>
                @elseif (auth()->user()->ID_rol == 3)
                    <p>Mesero</p>
                    <nav>
                        <menu>
                            <a href="#">Mi Cuenta</a>
                            <a href="#"></a>

                        </menu>
                    </nav>

                @elseif (auth()->user()->ID_rol == 4)
                    <p>RoomService </p>
                    <nav>
                        <menu>
                            <a href="#">Mi Cuenta</a>
                            <a href="#"></a>

                        </menu>
                    </nav>

                @elseif (auth()->user()->ID_rol == 5)
                    <p>cliente </p>
                    <nav>
                        <menu>
                            <a href="#">Mi Cuenta</a>
                            <a href="#"></a>

                        </menu>
                    </nav>

                @elseif (auth()->user()->ID_rol == 6)
                    <p>Seguridad </p>
                    <nav>
                        <menu>
                            <a href="#">Mi Cuenta</a>
                            <a href="#"></a>

                        </menu>
                    </nav>
                @else
                    <p>Rol no encontrado</p>
                @endif

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button>
                        Cerrar sesión
                    </button>
                </form>
        @endauth

    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
