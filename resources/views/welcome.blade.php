@extends('layouts.app') 

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Hotel Lodging</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>

<body>
  <header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="{{ asset('/') }}" class="logo"> <img src="image/LOGO3.png" alt=""> </a>

        <ul class="nav-menu">
          
          
          <li> <a href="{{ asset('/') }}" class="nav-link">Hogar</a> </li>
          <li> <a href="#restaurant" class="nav-link">Restaurante</a> </li>
          <li> <a href="#gallery" class="nav-link">Galleria</a> </li>
          <li> <a href="#about" class="nav-link">Acerca de</a> </li>
		      <li> <a href="{{ asset('login') }}" class="nav-link">Iniciar sesion</a> </li>
        </ul>

        <div class="hambuger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>
  <script>
    const hambuger = document.querySelector('.hambuger');
    const navMenu = document.querySelector('.nav-menu');

    hambuger.addEventListener("click", mobileMenu);

    function mobileMenu() {
      hambuger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }

    const navLink = document.querySelectorAll('.nav-link');
    navLink.forEach((n) => n.addEventListener("click", closeMenu));

    function closeMenu() {
      hambuger.classList.remove("active");
      navMenu.classList.remove("active");
    }
  </script>

  <section class="home" id="home">
    <div class="head_container">
      <div class="box">
        <div class="text">
          <h1>BIENVENIDO</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <button>MAS INFORMACION</button>
        </div>
      </div>
      <div class="image">
        <img src="image/home1.0.jpg" class="slide">
      </div>
      <div class="image_item">
        <!-- <img src="image/home1.jpg" alt="" class="slide active" onclick="{{ asset('image/home1.0.jpg') }}"> -->
        <img src="image/home2.jpg" alt="" class="slide" onclick="img('image/home2.jpg')">
        <img src="image/home3.jpg" alt="" class="slide" onclick="img('image/home3.jpg')">
        <img src="image/home4.jpg" alt="" class="slide" onclick="img('image/home4.jpg')">
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.image');
      line.style.background = change;
    }
  </script>
  <section class="book">
    <div class="container flex">
      <div class="input grid">
        <div class="box">
          <label>registrar:</label>
          <input type="date" placeholder="Check-in-Date">
        </div>
        <div class="box">
          <label>verfifcar:</label>
          <input type="date" placeholder="Check-out-Date">
        </div>
        <div class="box">
          <label>Adultos:</label> <br>
          <input type="number" placeholder="0">
        </div>
        <div class="box">
          <label>Niños:</label> <br>
          <input type="number" placeholder="0">
        </div>
      </div>
      <div class="search">
        <input type="submit" value="BUSCAR">
      </div>
    </div>
  </section>
  <section class="about top" id="about">
    <div class="container flex">
      <div class="left">
        <div class="img">
          <img src="image/hotel.jpg" alt="" class="image1">
          <img src="image/hotel1.jpg" alt="" class="image2">
        </div>
      </div>
      <div class="right">
        <div class="heading">
          <h5>HOTEL MAGNIFICO DE ALTO NIVEL</h5>
          <h2>BIENVENIDO AL HOTEL LODGING</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button class="btn1">LEER MAS</button>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper top">
    <div class="container">
      <div class="text">
        <h2>NUESTROS SERVCIOS</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

        <div class="content">
          <div class="box flex">
            <i class="fas fa-swimming-pool"></i>
            <span>Picsina</span>
          </div>
          <div class="box flex">
            <i class="fas fa-dumbbell"></i>
            <span>Gym y yoga</span>
          </div>
          <div class="box flex">
            <i class="fas fa-spa"></i>
            <span>Spa y Masajes</span>
          </div>
          <div class="box flex">
            <i class="fa-brands fa-servicestack"></i>
            <span>Servico ala Habitacion</span>
          </div> 
          <div class="box flex">
            <i class="fa-solid fa-utensils"></i>
            <span>Restaurante</span>
          </div> 
          
        </div>
      </div>
    </div>
  </section>
  <section class="room top" id="rooms">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>HABITACIONES DE LIJO</h5>
          <h2>HABITACIONES</h2>
        </div>
        <div class="button">
          <button class="btn1">VER TODO</button>
        </div>
      </div>

      <div class="content grid">
        <div class="box">
          <div class="img">
            <img src="image/r1.jpg" alt="">
          </div>
          <div class="text">
            <h3>HABITACION FAMILIAR</h3>
            <p> <span>$</span>139 <span>/per night</span> </p>
            <a href="{{ asset('login') }}">reservar</a>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/r2.jpg" alt="">
          </div>
          <div class="text">
            <h3>HABITACION DOBLE</h3>
            <p> <span>$</span>129 <span>/per night</span> </p>
            <a href="{{ asset('login') }}">reservar</a>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/r3.jpg" alt="">
          </div>
          <div class="text">
            <h3>SUITE</h3>
            <p> <span>$</span>429 <span>/per night</span> </p>
            <a href="{{ asset('login') }}">reservar</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper wrapper2 top">
    <div class="container">
      <div class="text">
        <div class="heading">
          <h5>COMUNICACON DE NUESTROS CLIENTES</h5>
          <h2>LA GENTE DICE</h2>
        </div>

        <div class="para">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

          <div class="box flex">
            <div class="img">
              <img src="image/c.jpg" alt="">
            </div>
            <div class="name">
              <h5>MARIA</h5>
              <h5>BIEN :)</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="restaurant top" id="restaurant">
    <div class="container flex">
      <div class="left">
        <img src="image/restaurant.jpg" alt="">
      </div>
      <div class="right">
        <div class="text">
          <h2>NUESTRO RESTAURANTE</h2>
          <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="accordionWrapper">
          <div class="accordionItem open">
            <h2 class="accordionIHeading">Italian Kitchen</h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Mexican Kitchen</h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Comida de nuestro pais</h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Comida de otros paises</h2>
            <div class="accordionItemContent">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionIHeading');

    for (i = 0; i < accHD.length; i++) {
      accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
      var itemClass = this.parentNode.className;
      for (var i = 0; i < accItem.length; i++) {
        accItem[i].className = 'accordionItem close';
      }
      if (itemClass == 'accordionItem close') {
        this.parentNode.className = 'accordionItem open';
      }
    }
  </script>



  <section class="gallary mtop " id="gallery">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>AQUIE ESTA NUESTRA GALERIA</h5>
          <h2>FOTOS DE NUESTRO HOTEL</h2>
        </div>
        <div class="button">
          <button class="btn1">VER GALLERIA</button>
        </div>
      </div>

      <div class="owl-carousel owl-theme">
       
        <div class="item">
          <img src="image/g5.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g6.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g7.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g8.jpg" alt="">
        </div>
      </div>

    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>





  <footer>
    <div class="container grid top">
      <div class="box">
        

        <p>Métodos de pago aceptados</p>
        <div class="payment grid">
          <img src="https://img.icons8.com/color/48/000000/visa.png" />
          <img src="https://img.icons8.com/color/48/000000/mastercard.png" />
          <img src="https://img.icons8.com/color-glass/48/000000/paypal.png" />
          
        </div>
      </div>

      <div class="box">
        <h3>Noticias recientes</h3>

        <ul>
          <li> Hotel relajante</li>
          <li>marzo en hotel lodging</li>
          <li>conciertos en vivo en lodging</li>
        </ul>
      </div>

      <div class="box">
        <h3>Para clientes</h3>
        <ul>
          <li>acerca de hotel lodging</li>
          <li>Atencion al cliente/ayuda</li>
          <li>Terminos Y condiciones</li>
        </ul>
      </div>

      <div class="box">
        <h3>Contact Us</h3>

        <ul>
          <li>Contáctenos </li>
          <li><i class="far fa-envelope"></i>rlozanotique@gmail.com </li>
          <li><i class="far fa-phone-alt"></i>34234758869 </li>
          <li><i class="far fa-phone-alt"></i>213465889 </li>
          <li><i class="far fa-comments"></i>servicio de atencion al cliente 24/7</li>
        </ul>
      </div>
    </div>
  </footer>

</body>

</html>