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
  
  <a class="regresar" href="{{ asset('/') }}" >Regresar</a>
  

 


    

    <form action="{{ route('login') }}" method="POST" novalidate>
        @csrf
        <h3>Hotel Lodging <br>Inicia Sesión</h3>
        @if (session('mensaje'))
            <h6>{{ session('mensaje') }}</h6>   
        @endif

        <div class="input-group">
            
            <label for="Email">Email</label>
            <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
        </div>
        @error('email')
            <h6>{{ $message }}</h6>
        @enderror

        <div class="input-group">
            
            <label for="Password">Password</label>
            <input type="password" name="password" placeholder="Contraseña">
        </div>
        @error('password')
            <h6>{{ $message }}</h6>
        @enderror

        <a href="{{ route('usuarios.create') }}">crear cuenta</a>

        <input class="boton"  type="submit" name="login" value="Iniciar sesión">
    

        <div class="social">
            <div class="go"><i class="fab fa-google"></i>  Google</div>
            <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
</div>
    
</body>
</html>
