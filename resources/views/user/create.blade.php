@extends('layouts.app')

@section('content') 
<body>
    <form action="{{ route('user.store') }}" method="post">
    @csrf

    @if (session('mensaje'))
        <h6>{{ session('mensaje') }}</h6>
    @endif


    <input type="text" name="Nro_doc" id="" placeholder="Numero de documento" value="{{ old('Nro_doc') }}">
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

    <input type="email" name="email" id="" placeholder="Correo electronico:" value="{{ old('email') }}">
    @error('email')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="password" name="password" id="" placeholder="Contraseña:" value="{{ old('password') }}">

    @error('password')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="text" name="Telefono" id="" placeholder="Telefono" value="{{ old('Telefono') }}">
    @error('Telefono')
        <h6>{{ $message }}</h6>
    @enderror

    <input type="text" name="Estado" id="" placeholder="Estado" value="{{ old('Estado') }}">
    @error('Estado')
        <h6>{{ $message }}</h6>
    @enderror

    <select name="ID_rol" id="ID_rol">
        <option value="1">ADMINISTRADOR</option>
        <option value="2">RECEPCIONISTA</option>
        <option value="3">MESERO</option>
        <option value="4">ROOMSERVICE</option>
        <option value="5">CLIENTE</option>
        <option value="6">SEGURIDAD</option>
    </select>

    @error('ID_rol')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="submit" name="send" value="Crear">

    </form>

  
</body>

@endsection 

</html>
