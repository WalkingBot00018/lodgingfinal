<body>

    <a class="regresar" href="{{ asset('/') }}" >Regresar</a>
   <form action="{{ route('user.store') }}" method="post">
   <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @csrf
    
    @if (session('mensaje'))
        <h6>{{ session('') }}</h6>   
    @endif

    <label for="Nro_doc">Numero de Documento</label>
    <input type="text" name="Nro_doc" id="" placeholder="Document Number" value="{{ old('Nro_doc') }}">
    @error('Nro_doc')
        <h6>{{ $message }}</h6>
    @enderror
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="" placeholder="Nombre" value="{{ old('Nombre') }}">
    @error('Nombre')
        <h6>{{ $message }}</h6>
    @enderror
    <label for="Apellido">apellido</label>
    <input type="text" name="Apellido" id="" placeholder="Apellido" value="{{ old('Apellido') }}">
    @error('Apellido')
        <h6>{{ $message }}</h6>
    @enderror
    <label for="Email">Email</label>
    <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
    @error('email')
        <h6>{{ $message }}</h6>
    @enderror
    <label for="Password">Password</label>
    <input type="password" name="password" id="" placeholder="Password" value="{{ old('password') }}">

    @error('password')
        <h6>{{ $message }}</h6>
    @enderror
    <label for="Telefono">Telefono</label>
    <input type="text" name="Telefono" id="" placeholder="telefono" value="{{ old('Telefono') }}">
    @error('Telefono')
        <h6>{{ $message }}</h6>
    @enderror

    <label for="Estado">Estado</label>
    <select name="Estado" id="Estado">
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>
    @error('Estado')
        <h6>{{ $message }}</h6>
    @enderror
    <label for="Rol">Rol</label>
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
    <input type="submit" name="send" value="Send">

            </form> 
        </article>
    </section>
   
</body>


</html>