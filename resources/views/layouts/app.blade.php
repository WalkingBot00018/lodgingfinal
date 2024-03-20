<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title> @yield('title', 'Sistema Hotelero Lodging') </title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        main {
            margin-top: 50px;
            text-align: center;
        }

        nav menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        nav menu a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        nav menu a:hover {
            color: #0056b3;
        }

        button {
            margin-top: 20px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
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
                                <a href="{{ route('role.index') }}">Gestionar roles</a>
                                <a href="{{ route('reserva.index') }}">Gestionar reservas</a>
                                <a href="{{ route('habitacion.index') }}">Gestionar habitaciones</a>
                                <a href="{{ route('servicio.index') }}">Gestionar servicios</a>
                                <a href="{{ route('factu.create') }}">Generar facturas</a>
                                <a href="{{ route('user.index') }}">Gestionar usarios</a>
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
