<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Eventi Privati</title>
  
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
  <span class="load-html" data-container="navbar-container" data-source="/partial/navbar-bootstrap.html"></span>

  <!-- HERO -->
  <span id="hero-container"></span>
  <span class="load-html" data-container="hero-container" data-source="/partial/hero-eventi.html"></span>

  <div id="eventi">
    <div class="container">
      <div class="intro">
        <p>Eventi sportivi, eventi moda, feste e tanto divertimento presso il Sunsea. La struttura offre, infatti, una cornice perfetta per ricevimenti, feste, eventi sportivi, sfilate e cerimonie. Il Sunsea è anche tutto questo, ma anche tanto altro ancora, in base alle vostre richieste e alla vostra fantasia.</p>
      </div>


      <div class="poster2 mt-3">
        <div class="poster2__img reveal">
          <img src="../static/img/eventifoto.png" alt="">
        </div>
        <div class="poster2__content reveal">
          <h7>Matrimoni</h7>
          <p>Il nostro team di eventi è qualificato per curare un'ampia gamma di allestimenti nuziali progettati per offrire ai nostri ospiti un'esperienza irripetibile. Che si tratti di coriandoli lanciati da elicotteri, percorsi a lume di candela lungo piscine fiancheggiate da palme o il tavolo per gli ospiti con vista sull'oceano, ogni squadra è in contatto con specialisti in ogni campo.Il tuo desiderio è davvero il loro comando! Producendo innumerevoli eventi acclamati negli ultimi 20 anni, i team di eventi del Sunsea, indipendentemente dal luogo, possono organizzare una celebrazione che è perfettamente adatta alle esigenze di ogni individuo e sono sempre a disposizione per supportare ogni passo del cammino.Atti di intrattenimento personalizzati, decorazioni personalizzate, concetti unici.</p>
          <p>Per maggiori informazioni sull'organizzazione di feste private, siete pregati di contattarci!</p>              
        </div>
      </div>
    

      <div class="grid mt-3">
        <div class="col reveal">
          <h7>Galleria </h7>
        </div>
      </div>
      <br>

      <div class="carousel" data-flickity='{ "wrapAround": true }'>
        <div class="carousel-cell">
          <img src="../static/img/eventi2.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="../static/img/eventi3.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="../static/img/eventi4.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="../static/img/eventi5.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="../static/img/eventi6.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="../static/img/eventi7.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="../static/img/eventi8.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="../static/img/eventi9.png" alt="" />
        </div>
        <div class="carousel-cell">
          <img src="../static/img/eventi1.png" alt="" />
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
  <span class="load-html" data-container="footer-container" data-source="/partial/footer.html"></span>

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <!-- SCRIPTS
  <span id="scripts-container"></span>
  <span class="load-html" data-container="scripts-container" data-source="/partial/scripts.html"></span> -->

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Coockie -->
  <script src="/static/js/coockie.js" async></script>

  <!-- Hamburger -->
  <script>
      $(document).ready(function() {
          $( ".hamburger" ).on('click', function() {
              $(".menu").toggleClass("menu--open");
          });
      });
  </script>

  <!-- Buttons -->
  <script>
      function buttonChoise() {
          /** choise: true if ok, false else */
          var choise = confirm("Vuoi confermare la scelta?");
      }
      function buttonAlert() {
          alert("Purtroppo l'ombrellone selezionato è stato già prenotato!");
      }
  </script>

  <!-- Load HTML -->
  <script>
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
  <script>
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