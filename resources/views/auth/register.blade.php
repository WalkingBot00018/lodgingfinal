<body>
    <a class="regresar" href="{{url('/login')}}">Regresar</a>
    <section class="contenidoC">
        <h1>Usuarios</h1>
        <article>
            <link rel="stylesheet" href="{{ asset('css/register.css') }}">
            <form action="{{ route('user.store') }}" method="post">
                @csrf

                @if (session('mensaje'))
                    <h6>{{ session('mensaje') }}</h6>
                @endif


                <input class="contenedorinput" type="text" name="Nro_doc" id="" placeholder="Numero de documento" value="{{ old('Nro_doc') }}">
                @error('Nro_doc')
                    <h6>{{ $message }}</h6>
                @enderror

                <input type="text" name="Nombre" id="" placeholder="Nombre" value="{{ old('Nombre') }}">
                @error('Nombre')
                    <h6>{{ $message }}</h6>
                @enderror

                <input type="text" name="Apellido" id="" placeholder="Apellido" value="{{ old('Apellido') }}">
                @error('Apellido')
                    <h6>{{ $message }}</h6>
                @enderror

                <input type="email" name="email" id="" placeholder="Correo" value="{{ old('email') }}">
                @error('email')
                    <h6>{{ $message }}</h6>
                @enderror
                <input type="password" name="password" id="" placeholder="Contraseña" value="{{ old('password') }}">

                @error('password')
                    <h6>{{ $message }}</h6>
                @enderror

                <input type="text" name="Telefono" id="" placeholder="telefono" value="{{ old('Telefono') }}">
                @error('Telefono')
                    <h6>{{ $message }}</h6>
                @enderror


                <select name="Estado" id="Estado">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                @error('Estado')
                    <h6>{{ $message }}</h6>
                @enderror

                <select name="ID_rol" id="ID_rol">
                    <option value="1">ADMINISTRADOR</option>
                    <option value="2">CLIENTE</option>
                    <option value="3">RECEPSIONISTA</option>
                    <option value="4">MANTENIMIENTO SISTEMA</option>
                    <option value="5">PERSONAL DE LIMPIEZA</option>
                    <option value="6">SEGURIDAD</option>
                </select>


                @error('ID_rol')
                    <h6>{{ $message }}</h6>
                @enderror
                <input    class="crear"type="submit" name="send" value="Crear">

            </form>
        </article>
    </section>

 

</body>


</html>
