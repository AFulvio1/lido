<?php
  if (isset($_SESSION['previous'])) {
    if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
      session_destroy();
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mini club</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Imprima:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great Vibes:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Voltaire:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="stylesheet" href="/static/css/style-antonio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="/static/css/coockie.css" async>
</head>

<body>
  <!-- NAVBAR -->
  <span id="navbar-container"></span>
  <span class="load-html" data-container="navbar-container" data-source="/partials/navbar-bootstrap.html"></span>

  <!-- HERO -->
  <span id="hero-container"></span>
  <span class="load-html" data-container="hero-container" data-source="/partials/hero-miniclub.html"></span>

  
  <div id="miniclub">
    <div class="container">
      <div class="intro">
        <p>In spiaggia tutto ciò che desideri per i tuoi bimbi in vacanza, un ambiente familiare con tanti servizi per i bambini di tutte le età, per farvi sentire proprio come a casa.Vasto parco giochi per bambini completamente recintato e assistito da animatrici. Il Mini Club rimane aperto anche la sera dopo cena.</p>
      </div>

      <div class="poster2 mt-3">
        <div class="poster2__img reveal">
          <img src="/static/img/miniclubfoto1.png" alt="">
        </div>
        <div class="poster2__content reveal">
          <h7>Il mini club</h7>
          <p>La sabbia è fatta appositamente, per scavarci buche, costruire fortificazioni, sculture astratte. La spiaggia è stata inventata per giocare. Non è un caso quindi che al Sunsea abbiamo attrezzato una grande area per i bambini. Per i nostri piccolissimi c’è un’area giochi dedicata, riservata ai piccolissimi da 1 a 3 anni recintata e all’ombra (ma nulla vieta ai più grandi dei nostri di fare incursioni sulle altalene e gli scivoli dei bimbi più grandi!). Vengono spesso organizzati eventi con musica, animazione e truccabimbi e, dulcis in fundo, la struttura è dotata di servizi igienici con lavandini e water di dimensioni ridotte pensati proprio per agevolare i più piccini. Inoltre è possibile organizzare qui la festa di compleanno dei vostri bambini.</p>
          <br>
          <div class="icona">
            <span style="color: #57AEE7;">
              <p><i class="fa-solid fa-child-reaching fa-2s"></i>&emsp;Orario: 8:30 - 17:30 / 21:00 - 22:30 </p>             
            </span>
          </div> 
        </div>
      </div>
      
      <div class="img_miniclub">
        <img src="/static/img/miniclubfoto2.png" alt="">
      </div>

        

      <div class="poster2 mt-3">
        <div class="poster2__img reveal">
          <img src="/static/img/miniclubfoto3.png" alt="">
        </div>
        <div class="poster2__content reveal">
          <h7>L 'animazione</h7>
          <p>Il programma del Mini Club ha come obiettivo quello di favorire un armonico ed equilibrato incontro tra bambini di età diverse, stimolare la creatività e la fantasia attraverso il gioco libero ed organizzato, senza tralasciare l’acquisizione delle regole comportamentali. Tutto questo saraà gestito da un'affidabile e studiato gruppo di animatori e animatrici, solo il meglio al Sunsea!</p>
          <p>Il servizio di animazione in spiaggia è dedicato a bambini di età compresa tra 3 e 12 anni. Per qualsiasi informazione per iscrizione al mini club siete pregati di contattarci.</p>
        </div>
      </div>

    
      <div class="grid mt-3">
        <div class="col reveal">
          <h7>Galleria </h7>
        </div>
      </div>
      <br>
      <br>

      <div class="carousel" data-flickity='{ "wrapAround": true }'>
        <div class="carousel-cell">
          <img src="/static/img/miniclub2.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub3.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub4.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub5.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub6.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub7.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub8.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub9.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub10.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/miniclub1.png" alt="" />
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
  </div>



  <!-- FOOTER DA FARE -->
  <span id="footer-container"></span>
  <span class="load-html" data-container="footer-container" data-source="/partials/footer.html"></span>

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <!-- SCRIPTS
  <span id="scripts-container"></span>
  <span class="load-html" data-container="scripts-container" data-source="/partials/scripts.html"></span> -->

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Coockie -->
  <script src="/static/js/coockie.js" async></script>

  <!-- Hamburger -->
  <script type="text/javascript">
      $(document).ready(function() {
          $( ".hamburger" ).on('click', function() {
              $(".menu").toggleClass("menu--open");
          });
      });
  </script>

  <!-- Buttons -->
  <script type="text/javascript">
      function buttonChoise() {
          /** choise: true if ok, false else */
          var choise = confirm("Vuoi confermare la scelta?");
      }
      function buttonAlert() {
          alert("Purtroppo l'ombrellone selezionato è stato già prenotato!");
      }
  </script>

  <!-- Load HTML -->
  <script type="text/javascript">
      $(function () {
          $(document).ready(function () {
              $(".load-html").each(function () {
                  var container = '#' + $(this).attr('data-container');
                  var src = $(this).attr('data-source');
                  $(container).load(src);
              });
          });
      });
  </script>

  <!-- Navbar -->
  <script type="text/javascript">
  $(function () {
      $(window).on('scroll', function () {
          if ( $(window).scrollTop() > 10 ) {
              $('.navbar').addClass('active');
          } else {
              $('.navbar').removeClass('active');
          }
      });
  });
  </script>

</body>
</html>