<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
    <link rel="stylesheet" href="{{asset('/css/habitaciones.css')}}">
</head>
<body>
<header>
        <div>
            <ul>
                <li><a class="botonn" href="/">regresar
                </li></a>
                
            </ul>
        </div>
        <div>
            <h1 class="caja1">HABITACIONES</h1>
        </div>
    </header>
    <body>
    <div class="slider">
        <nav>
            <ul>
                <li><img class="imagen1" src="{{asset('image/habitacionesimg/n1.png')}}" alt="imagen1"></li>
                <li><img class="imagen2" src="{{asset('image/habitacionesimg/n2.png')}}" alt="imagen2"></li>
                <li><img class="imagen3" src="{{asset('image/habitacionesimg/n3.jpg')}}" alt="imagen3"></li>
                <li><img class="imagen4" src="{{asset('image/habitacionesimg/4.png')}}" alt="imagen4"></li>
                <li><img class="imagen5" src="{{asset('image/habitacionesimg/5.JPG')}}" alt="imagen5"></li>
                <li><img class="imagen6" src="{{asset('image/habitacionesimg/n6.jpg')}}" alt="imagen6"></li>
                <li><img class="imagen7" src="{{asset('image/habitacionesimg/n8.png')}}" alt="imagen7"></li>
                <li><img class="imagen8" src="{{asset('image/habitacionesimg/n1.png')}}" alt="imagen8"></li>
                <li><img class="imagen9" src="{{asset('image/habitacionesimg/n8.jpg')}}" alt="imagen9"></li>
                
            </ul>
        </nav>    
    </div>
    <div class="contenedor">
        <figure class="caja2">
            <h1>HABITACION INDIVIDUAL</h1>
            <img src="{{asset('image/habitacionesimg/individual.png')}}" alt="imagen">
        </figure>
        <div>
            <h1 class="h">CARACTERISTICAS</h1>
            <ul>
                <li>Tiene una cama individual</li>
                <li>1 instalacion adicional para dormir</li>
                <li>1 ventilador </li>
                <li>posee baño con tina</li>
            </ul>
        </div>
        <div>
            <a class="boton" href="{{ url('login')}}">RESERVAR</a>
        </div>
        <div>
            <p class="caja6">PRECIO:$$</p>
        </div>
    </div>
    <div class="contenedor2">
        <figure class="caja3">
            <h1>HABITACION DOBLE</h1>
            <img src="{{asset('image/habitacionesimg/doble.png')}}" alt="imagen">
        </figure>
        <div>
            <h1 class="hh">CARACTERISTICAS</h1>
            <ul>
                <li>Tiene dos camas individuales</li>
                <li>1 cama adicional(opcional)</li>
                <li>2 ventiladores </li>
                <li>doble baño independiente</li>
            </ul>
        </div>
        <div>
            <a class="boton1" href="{{ url('login')}}">RESERVAR</a>
        </div>
        <div>
            <p class="caja7">PRECIO:$$</p>
        </div>
    </div>
    <div class="contenedor3">
        <figure class="caja4">
            <h1>HABITACION SUITE</h1>
            <img src="{{asset('image/habitacionesimg/suite.png')}}" alt="imagen">
        </figure>
        <div>
            <h1 class="hhh">CARACTERISTICAS</h1>
            <ul>
                <li>Aire acondicionado</li>
                <li>Habitacion amplia</li>
                <li>servicio de cafeteria</li>
                <li>servicio minibar</li>
            </ul>
        </div>
        <div>
            <a class="boton2" href="{{ url('login')}}">RESERVAR</a>
        </div>
        <div>
            <p class="caja8">PRECIO:$$</p>
        </div>
    </div>
    <div class="contenedor4">
    <figure class="caja5">
        <h1>HABITACION MATRIMONIAL</h1>
        <img src="{{asset('image/habitacionesimg/matrimonial.png')}}" alt="imagen">
    </figure>
        <div>
        <h1 class="hhhh">CARACTERISTICAS</h1>
            <ul>
                <li>tv con todo tipo de contenido</li>
                <li>Habitacion amplia</li>
                <li>Servicio minibar </li>
                <li>1 Cama extragrande</li>
            </ul>
        </div>
        <div>
            <a class="boton3" href="{{ url('login')}}">RESERVAR</a>
        </div>
        <div>
            <p class="caja9">PRECIO:$2.500.000</p>
        </div>
    </div>
    </body>
    <footer></footer>
        
</body>
</html>


