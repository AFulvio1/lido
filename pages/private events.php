<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Eventi Privati</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre Baskerville:wght@300;400;700;900&display=swap">
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

  <div class="container">
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
        <h6 class="big-text">EVENTI PRIVATI</h6>
      </div>
    
      <div class="img">
        <img src="../static/img/eventisfondo.png" alt="">
      </div>  
    </div>
    <br>
    <br>
    <br>
  
    <div class="intro">
      <p>Eventi sportivi, eventi moda, feste e tanto divertimento presso il Sunsea. La struttura offre, infatti, una cornice perfetta per ricevimenti, feste, eventi sportivi, sfilate e cerimonie. <br> Il Sunsea è anche tutto questo, ma anche tanto altro ancora, in base alle vostre richieste e alla vostra fantasia.</p>
    </div>


    <div class="poster2 mt-3">
      <div class="poster2__img reveal">
        <img src="../static/img/eventifoto.png" alt="">
      </div>
      <div class="poster2__content reveal">
        <h7 class="big-text">Matrimoni</h7>
        <p>Il nostro team di eventi è qualificato per curare un'ampia gamma di allestimenti nuziali progettati per offrire ai nostri ospiti un'esperienza irripetibile. Che si tratti di coriandoli lanciati da elicotteri, percorsi a lume di candela lungo piscine fiancheggiate da palme o il tavolo per gli ospiti con vista sull'oceano, ogni squadra è in contatto con specialisti in ogni campo. Il tuo desiderio è davvero il loro comando! Producendo innumerevoli eventi acclamati negli ultimi 20 anni, i team di eventi del Sunsea, indipendentemente dal luogo, possono organizzare una celebrazione che è perfettamente adatta alle esigenze di ogni individuo e sono sempre a disposizione per supportare ogni passo del cammino.Atti di intrattenimento personalizzati, decorazioni personalizzate, concetti unici.</p>
      </div>
    </div>
    <br>
    <br>
  

    <div class="grid mt-3">
      <div class="col reveal">
        <h7 class="big-text">Galleria eventi</h7>
      </div>
      <div class="col reveal">
        <p class="mt-2 mt-sma-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum tenetur sunt unde ut ducimus, fuga quia magni non reiciendis optio. Facilis accusamus vero quo, facere. Soluta molestiae inventore, sit rem!</p>
      </div>
    </div>
    <br>
    <br>

    <div class="carousel"
    data-flickity='{ "wrapAround": true }'>
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
      <img src="../static/img/eventi1.png" alt="" />
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