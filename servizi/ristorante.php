<?php
    if (isset($_SESSION['previous'])) {
        if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
            session_destroy();
            ### or alternatively, you can use this for specific variables:
            ### unset($_SESSION['varname']);
        }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristorante</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great Vibes:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Imprima:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Voltaire:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="stylesheet" href="/static/css/style-antonio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="/static/css/coockie.css" async>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <span id="navbar-container"></span>
    <span class="load-html" data-container="navbar-container" data-source="/partials/navbar-bootstrap.html"></span>

    <!-- HERO -->
    <span id="hero-container"></span>
    <span class="load-html" data-container="hero-container" data-source="/partials/hero-ristorante.html"></span>
    
    <div id="ristorante">
        <div class="container">

            <div class="intro" data-aos="fade-up">
                <p>Il ristorante del Sunsea gode di un suggestivo affaccio sul Mare. Luminoso e rilassante, domina l'intero resort e regala ai suoi ospiti un riuscito mix di classici della cucina italiana e gustosi menù di pesce, cucinati sempre tenendo conto della stagionalità e della freschezza delle materie prime.</p>
            </div>

            <div class="poster2 mt-3" data-aos="fade-up">
                <div class="poster2__content reveal">
                    <h7>Il ristorante</h7>
                    <p>Il ristorante di cucina tipica di mare del Sunsea dispone di una sala panoramica e di tavoli all'aperto. Il servizio di ristorazione è aperto tutto l'anno. La sala è a disposizione anche per banchetti, feste di compleanno, cerimonie e cene di lavoro su prenotazione. La cucina proposta dallo chef è attenta alla stagionalità delle materie prime. Il Pesce è una delle Specialità del nostro Ristorante, grazie alla qualità e la freschezza della materia prima e ai nostri menù. Cucinare il Pesce è un’arte e la freschezza del Pesce l’aspetto più importante. Al Ristorante potrai trovare pesce fresco stagionale a secondo della disponibilità.</p>
                </div>
                <div class="poster2__img reveal">
                    <img src="/static/img/ristorantefoto.png" alt="">
                </div>
            </div>
            <br>
            <br>

            <ul class="img_menù" data-aos="fade-up">
                <img src="/static/img/ristorantemenù1.png" alt="">
                <img src="/static/img/ristorantemenù2.png" alt="">
            </ul>
            <br>
            <br>

            <ul class="img_menù" data-aos="fade-up">
                <img src="/static/img/ristorantemenù3.png" alt="">
                <img src="/static/img/ristorantemenù4.png" alt="">
            </ul>
            <p><u>IL MENÙ PUÒ SUBIRE VARIAZIONI IN BASE ALLA REPERIBILITÀ E ALLA STAGIONALITÀ DEI PRODOTTI</u><p>
            <br>
            <br>

            <div class="grid mt-3" data-aos="fade-up">
                <div class="col reveal">
                    <h7>Galleria</h7>
                </div>
                <!--<div class="col reveal">
                    <p class="mt-2 mt-sma-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum tenetur sunt unde ut ducimus, fuga quia magni non reiciendis optio. Facilis accusamus vero quo, facere. Soluta molestiae inventore, sit rem!</p>
                </div>-->
            </div>
            <br>
            <br>

            <div class="carousel" data-flickity='{ "wrapAround": true }'>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante1.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante2.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante3.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante4.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante5.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante6.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante7.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante8.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante9.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante10.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante11.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante12.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante13.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante14.png" alt="" />
                </div>
                <div class="carousel-cell">
                    <img src="/static/img/ristorante15.png" alt="" />
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
