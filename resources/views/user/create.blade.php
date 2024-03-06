{{-- @extends('layouts.app')

@section('content') --}}

<body>
   <form action="{{ route('user.store') }}" method="post">
    @csrf

    @if (session('mensaje'))
        <h6>{{ session('mensaje') }}</h6>
    @endif


    <input type="text" name="Nro_doc" id="" placeholder="Document Number" value="{{ old('Nro_doc') }}">
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

    <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
    @error('email')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="password" name="password" id="" placeholder="Password" value="{{ old('password') }}">

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

    <input type="text" name="ID_rol" id="" placeholder="Role Id" value="4">

    @error('ID_rol')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="submit" name="send" value="Send">

    </form>
</body>
{{--
@endsection --}}

</html>
