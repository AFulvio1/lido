<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristorante</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great Vibes:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Imprima:wght@300;400;700;900&display=swap">
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
                <h6 class="big-text">RISTORANTE</h6>
            </div>
    
            <div class="img">
                <img src="../static/img/ristorantesfondo.png" alt="">
            </div>  
        </div>
    
    <div class="container">
        <div class="intro">
            <p>Il ristorante del Sunsea gode di un suggestivo affaccio sul Mare. Luminoso e rilassante, domina l'intero resort e regala ai suoi ospiti un riuscito mix di classici della cucina italiana e gustosi menù di pesce, cucinati sempre tenendo conto della stagionalità e della freschezza delle materie prime.</p>
        </div>

        <div class="poster2 mt-3">
            <div class="poster2__content reveal">
                <h7>Il ristorante</h7>
                <p>Il ristorante di cucina tipica di mare del Sunsea dispone di una sala panoramica e di tavoli all'aperto. Il servizio di ristorazione è aperto tutto l'anno. La sala è a disposizione anche per banchetti, feste di compleanno, cerimonie e cene di lavoro su prenotazione. La cucina proposta dallo chef è attenta alla stagionalità delle materie prime. Il Pesce è una delle Specialità del nostro Ristorante, grazie alla qualità e la freschezza della materia prima e ai nostri menù. Cucinare il Pesce è un’arte e la freschezza del Pesce l’aspetto più importante. Al Ristorante potrai trovare pesce fresco stagionale a secondo della disponibilità.</p>
            </div>
            <div class="poster2__img reveal">
                <img src="../static/img/ristorantefoto.png" alt="">
            </div>
        </div>
        <br>
        <br>

        <ul class="img_menù">
            <img src="../static/img/ristorantemenù1.png" alt="">
            <img src="../static/img/ristorantemenù2.png" alt="">
        </ul>
        <br>
        <br> 
        <ul class="img_menù">
            <img src="../static/img/ristorantemenù3.png" alt="">
            <img src="../static/img/ristorantemenù4.png" alt="">
        </ul>
        <p><u>IL MENÙ PUÒ SUBIRE VARIAZIONI IN BASE ALLA REPERIBILITÀ E ALLA STAGIONALITÀ DEI PRODOTTI</u><p>
        <br>
        <br>

        <div class="grid mt-3">
            <div class="col reveal">
                <h7>Galleria</h7>
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
            <img src="../static/img/ristorante1.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante2.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante3.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante4.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante5.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante6.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante7.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante8.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante9.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante10.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante11.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante12.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante13.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante14.png" alt="" />
        </div>
        <div class="carousel-cell">
            <img src="../static/img/ristorante15.png" alt="" />
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
