<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Beach-Volley</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Imprima:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great Vibes:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Voltaire:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="/static/css/coockie.css" async>
</head>

<body>
  <!-- NAVBAR -->
  <span id="navbar-container"></span>
  <span class="load-html" data-container="navbar-container" data-source="/partial/navbar.html"></span>

  <!-- HERO -->
  <span id="hero-container"></span>
  <span class="load-html" data-container="hero-container" data-source="/partial/hero.html"></span>

  
    <nav>
      <div class="header">
        <div class="logo">
          <img src="/static/img/logo.png" alt="logo" height="60" width="100">
        </div>
  
        <ul class="menu">
          <li><a href="/index.php">Home</a></li>
          <li><a href="#about us">About us</a></li>
          <li><a href="#servizi">Servizi</a></li>
          <li><a href="#galleria">Galleria</a></li>
          <li><a href="#contatti">Contatti</a></li>
        </ul>
      
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
  
      </div>
    </nav>

    <div id="home"  class="hero">
      <div class="hero__content">
        <h6 class="big-text">BEACH-VOLLEY</h6>
      </div>
    
      <div class="img">
        <img src="../static/img/b-vsfondo.png" alt="">
      </div>  
    </div>
  
  <div class="container">

    <div class="poster2 mt-3">
      <div class="poster2__img reveal">
        <img src="../static/img/b-vfoto1.png" alt="">
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
        <img src="../static/img/b-vfoto2.png" alt="">
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

    <div class="carousel"
    data-flickity='{ "wrapAround": true }'>
    <div class="carousel-cell">
      <img src="../static/img/b-v2.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v3.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v4.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v5.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v6.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v7.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v8.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v9.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v10.png" alt="" />
    </div>
    <div class="carousel-cell">
      <img src="../static/img/b-v1.png" alt="" />
    </div>

    <!--
    <footer>
      <div><p>Sunsea srl - P.Iva 123456789</p></div>
      <div><p>Copyrights Valentini Martina & Fulvio Antonio</p></div>
      <ul class="footer-icon-container">
        <span style="color:#fff;">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-pinterest-p"></i>
            <i class="fa-brands fa-instagram"></i> 
            <i class="fa-brands fa-twitter"></i>
        </span>
      </ul>
    </footer>
    -->
    

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    
    
    <!-- FOOTER -->
    <span id="footer-container"></span>
    <span class="load-html" data-container="footer-container" data-source="/partial/footer.html"></span>
  </div>

</body>
</html>