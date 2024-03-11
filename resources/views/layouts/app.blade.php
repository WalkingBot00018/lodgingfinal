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
            HOTEL LODGING
        </h2>
        @auth
            <p>Bienvenido {{ auth()->user()->Nombre }}</p>            
                @if (auth()->user()->ID_rol == 1)
                    <p>Administrador</p>
                        <nav>
                            <menu>
                                <a href="#">Mi Cuenta</a>
                                <a href="{{ route('role.index') }}">Gestionar roles</a>
                            </menu>
                        </nav>                        
                @elseif (auth()->user()->ID_rol == 2)
                    <nav>
                        <p>Rol: Cliente</p>
                        <menu>
                            <a href="#"></a>
                            <a href="#"></a>
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

        @guest
            <p>Usuario invitado</p>  
            <nav>
                <menu>
                    <a href="{{ route('user.create') }}">Crear cuenta</a>
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                    <a href="#">Misión...</a>
                    <a href="#">Visión...</a>
                    <a href="#">Quienes somos...</a>
                </menu>  
            </nav>
        @endguest
    </main>
    @yield('content')

</body>
</html>