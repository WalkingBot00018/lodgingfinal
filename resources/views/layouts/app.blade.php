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
        <h2>
        </h2>
        @auth
            <p>Bienvenido {{ auth()->user()->Nombre }}</p>
                @if (auth()->user()->ID_rol == 1)
                    <p>Administrador</p>
                        <nav>
                            <menu>
                                <a href="#">Mi Cuenta</a>
                                <a href="{{ route('rol.index') }}">Gestionar roles</a>
                                <a href="{{ route('reserva.index') }}">Gestionar reservas</a>
                                <a href="{{ route('habitacion.index') }}">Gestionar habitaciones</a>
                                <a href="{{ route('servicio.index') }}">Gestionar servicios</a>
                                <a href="{{ route('factura.create') }}">Generar facturas</a>
                                <a href="{{ route('usuarios.index') }}">Gestionar usarios</a>
                            </menu>
                        </nav>
                @elseif (auth()->user()->ID_rol == 2)
                    <nav>
                        <p>Rol: Cliente</p>
                        <menu>
                            <a href="{{ route('reserva.create') }}"> reservar habitacion elegida</a>
                            <a href="{{ route('reserva.store') }}">ver tus reservas</a>
                        </menu>
                    </nav>
                @elseif (auth()->user()->ID_rol == 3)
                    <p>Recepsionista</p>
                    <nav>
                        <menu>
                            <a href="#">Mi Cuenta</a>
                            <a href="#"></a>

                        </menu>
                    </nav>

                @elseif (auth()->user()->ID_rol == 4)
                    <p>Mantenimineto </p>
                    <nav>
                        <menu>
                            <a href="#">Mi Cuenta</a>
                            <a href="#"></a>

                        </menu>
                    </nav>

                @elseif (auth()->user()->ID_rol == 5)
                    <p>Limpieza </p>
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
    @yield('content')

</body>
</html>
