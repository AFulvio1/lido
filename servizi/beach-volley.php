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
  
  <title>Beach-Volley</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="./static/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="./static/img/favicon.ico" type="image/x-icon">

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
  <span class="load-html" data-container="hero-container" data-source="/partials/hero-volley.html"></span>

  
  <div id="campi">
    <div class="container">
      <div class="poster2 mt-3">
        <div class="poster2__img reveal">
          <img src="/static/img/b-vfoto1.png" alt="">
        </div>
        <div class="poster2__content reveal">
          <h7>Lo sport</h7>
          <p>C'è chi della vita da mare ama la sua dinamicità e la possibilità di svolgere attività sportive non praticabili durante l'inverno.<br> Parliamo di sport all'aperto, come ad esempio il beach volley.</p>
          <p>La pallavolo sulla sabbia è molto amata. E' un momento di puro divertimento, con quel pizzico di sana competizione, per tenersi in movimento anche in spiaggia e organizzare entusiasmanti tornei con gli amici.Nel nostro resort potrete trovare una varietà di campi a vostra disposizione per potervi divertire con i vostri amici e passare una giornata alla rassegna del divertimento.</p>
        </div>
      </div>

      <div class="grid mt-3">
        <div class="col reveal">
          <h7>Tesseramento</h7>
        </div>
        <div class="col reveal">
          <p class="mt-2 mt-sma-0">L’adesione alla nostra TESSERA CLUB offre diversi vantaggi:<br>-Tesseramento A.S.C. (Attività Sportive Confederate)<br>-Affitto campi a 5,00€ l’ora a persona invece che 7,00€<br>-10% di sconto su prenotazione di ombrelloni e lettini<br>-Sconto presso la nostra agenzia di riferimento</p>
          <div class="icona">
            <span style="color: #57AEE7;">
              <p><i class="fa-solid fa-address-card fa-2s"></i>&emsp;La nostra Tessera Club costa 25 euro.</p>             
            </span>
          </div> 
        </div>
      </div>
        

      <div class="poster2 mt-3">
        <div class="poster2__img reveal">
          <img src="/static/img/b-vfoto2.png" alt="">
        </div>
        <div class="poster2__content reveal">
          <h7>I tornei</h7>
          <p>Organizziamo tornei di beach volley durante tutto il periodo estivo. Con le loro 10 edizioni alle spalle, i nostri circuiti (2×2 maschile e femminile) sono ormai una tradizione.Il circuito prevede la partecipazione di atleti e atlete di ogni livello, con pool e tabelloni diversi per permettere a tutti i beacher di giocare e divertirsi.</p>
          <p>All’ultima tappa Master vengono premiati i vincitori dei due circuiti, maschile e femminile. I migliori si sfidano poi in un ulteriore appuntamento, il King e il Queen of the Beach.</p>
          <p>Oltre ai nostri classici circuiti organizziamo tornei Misti 2×2, ovvero il torneo Misto Giallo (con penalità estratte a sorte e divertenti situazioni inaspettate), il torneo Sotto le Stelle (dove si gioca dalle 18.00 fino all’alba) e altri tornei con formule diverse per varie occasioni.</p>
          <br>
          <div class="icona">
            <span style="color: #57AEE7;">
              <p><i class="fa-solid fa-phone-flip fa-2s"></i>&emsp;Chiama ed iscriviti : 3456789123</p>             
            </span>
          </div> 
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
          <img src="/static/img/b-v2.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v3.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v4.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v5.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v6.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v7.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v8.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v9.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v10.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="/static/img/b-v1.png" alt="" />
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