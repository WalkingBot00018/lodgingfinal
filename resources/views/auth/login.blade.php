<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Hotel Lodging - Inicia Sesión</title>
</head>
<body>

    <h1>Hotel Lodging <br>Inicia Sesión</h1>

    <form action="{{ route('login') }}" method="POST" novalidate>
        @csrf

        @if (session('mensaje'))
            <h6>{{ session('mensaje') }}</h6>   
        @endif

        <div class="input-group">
            <i class="fas fa-envelope"></i> <!-- Icono de correo electrónico -->
            <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
        </div>
        @error('email')
            <h6>{{ $message }}</h6>
        @enderror

        <div class="input-group">
            <i class="fas fa-lock"></i> <!-- Icono de candado para la contraseña -->
            <input type="password" name="password" placeholder="Contraseña">
        </div>
        @error('password')
            <h6>{{ $message }}</h6>
        @enderror

        <input type="submit" name="login" value="Iniciar sesión">
    </form>

    <div class="social-login">
        <p>O inicia sesión con:</p>
        <div class="social-icons">
            <a href="{{ url('auth/google') }}">
                <img src="{{ asset('img/google.png') }}" alt="Google">
            </a>
 
    </div>
</div>
    
</body>
</html>
