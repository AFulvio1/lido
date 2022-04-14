<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lido</title>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap">
</head>
<body>
  <!-- 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel- control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  -->

  <!-- questa è la prova con menù senza bootstrap-->
  <div class="header">
    <div class="logo">
      <img src="/img/logo.png" alt="" height="60" width="100">
    </div>
    <ul class="menu">
      <li><a href="">Home</a></li>
      <li><a href="">About us</a></li>
      <li><a href="#servizi">Servizi</a></li>
      <li><a href="">Galleria</a></li>
      <li><a href="">Contatti</a></li>
    </ul>
   
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div class="hero">
    <div class="hero__content">
      <p class="intro-text">Intro Text</p>
      <h1 class="big-text">Titolo Pagina Web </h1>
      <a href="" class="button">Scopri di più</a>
    </div>
    <video autoplay muted loop id="video">
      <source src="/video/video.mp4" type="video/mp4">
    </video>
  </div>

  <div class="poster">
    <div class="poster_content">
      <h2 class="big-text">About us</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo illum, blanditiis dolorum id quae perferendis dolore dolor quasi nostrum inventore minima sit similique unde delectus consequuntur ad alias. Tempora, alias!</p>
      <a href="" class="button2">Scorpi di più</a>
    </div>
    <div class="poster_img">
      <img src="/img/poster1.png" alt="">
    </div>
  </div>

  <div id="servizi" class="servizi">

    <h3 class="big-text">I nostri servizi</h3>

    <div class="container">
      <div class="row big-padding">
        <div class="col-md-3 col-xs-6">
          <h3>Spiaggia attrezzata</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta et fugit, in blanditiis repellat nam, voluptatibus consectetur, debitis pariatur quas voluptates quasi minima temporibus earum explicabo. Adipisci, impedit, praesentium.</p>
          <a href="" class="button2">Scorpi di più</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <h3>Docce calde e cabine</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta et fugit, in blanditiis repellat nam, voluptatibus consectetur, debitis pariatur quas voluptates quasi minima temporibus earum explicabo. Adipisci, impedit, praesentium.</p>
          <a href="" class="button2">Scorpi di più</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <h3>Parco giochi</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta et fugit, in blanditiis repellat nam, voluptatibus consectetur, debitis pariatur quas voluptates quasi minima temporibus earum explicabo. Adipisci, impedit, praesentium.</p>
          <a href="" class="button2">Scorpi di più</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <h3>Ristorante</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta et fugit, in blanditiis repellat nam, voluptatibus consectetur, debitis pariatur quas voluptates quasi minima temporibus earum explicabo. Adipisci, impedit, praesentium.</p>
          <a href="" class="button2">Scorpi di più</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row big-padding">
        <div class="col-md-3 col-xs-6">
          <h3>Campi beach volley</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta et fugit, in blanditiis repellat nam, voluptatibus consectetur, debitis pariatur quas voluptates quasi minima temporibus earum explicabo. Adipisci, impedit, praesentium.</p>
          <a href="" class="button2">Scorpi di più</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <h3>Tour della città</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta et fugit, in blanditiis repellat nam, voluptatibus consectetur, debitis pariatur quas voluptates quasi minima temporibus earum explicabo. Adipisci, impedit, praesentium.</p>
          <a href="" class="button2">Scorpi di più</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <h3>Eventi</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta et fugit, in blanditiis repellat nam, voluptatibus consectetur, debitis pariatur quas voluptates quasi minima temporibus earum explicabo. Adipisci, impedit, praesentium.</p>
          <a href="" class="button2">Scorpi di più</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <h3>Parcheggio privato</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta et fugit, in blanditiis repellat nam, voluptatibus consectetur, debitis pariatur quas voluptates quasi minima temporibus earum explicabo. Adipisci, impedit, praesentium.</p>
          <a href="" class="button2">Scorpi di più</a>
        </div>
      </div>
    </div>
  </div>
    
  
   
  





<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
  $(document).ready(function() {

    /* Open Panel */
    $( ".hamburger" ).on('click', function() {
      $(".menu").toggleClass("menu--open");
    });

  });
</script>

    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>