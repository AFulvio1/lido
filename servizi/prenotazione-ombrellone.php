<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prenota il tuo ombrellone</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./static/img//favicon.ico" type="image/x-icon">
    <link rel="icon" href="./static/img//favicon.ico" type="image/x-icon">

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
    <div id="navbar-container"></div>
    <div class="load-html" data-container="navbar-container" data-source="/partial/navbar-bootstrap.html"></div>

    <!-- HERO -->
    <span id="hero-container"></span>
    <span class="load-html" data-container="hero-container" data-source="/partial/hero-prenotazione.html"></span>

    

    <?php
        include("geturls.php");
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);

        $lettini = '5';
        $sdraio = '5';
        $cabina = '5';
        
        $counter_lettini = 0;
        $saldo_lettini = 0;
        $counter_sdraio = 0;
        $saldo_sdraio = 0;
        $counter_cabina = 0;
        $saldo_cabina = 0;

        
        if(isset($_POST['aggiungi_lettino'])) {
            $counter_lettini += 1;
            $saldo_lettini += 15;
        }
        if(isset($_POST['rimuovi_lettino'])) {
            $counter_lettini -= 1;
            $saldo_lettini -= 15;
        }

        function clickInc() {
            $conto = $params['c'] + ($lettini*$counter_lettini) + ($sdraio*$counter_sdraio) + ($cabina*$counter_cabina);
        }
    ?>

    <div id="prenotazione">
        <div class="box-prenotazione">
            <div class="container">
                <div class="row row-prenotazione justify-content-center">
                    <div class="col-lg-10 offset-lg-2"><h1>RIEPILOGO PRENOTAZIONE</h1></div>
                </div>
                <div class="row row-prenotazione justify-content-center">
                    <div class="col-lg-10 offset-lg-2">Prima di completare la prenotazione, scegli gli altri servizi da aggiungere</div>
                </div>
                <div class="row row-prenotazione justify-content-center">
                    <div class="col-lg-8">- Ombrellone selezionato: <?php echo $params['n']?></div>
                        <div class="col-lg-1"><?php echo $params['c']?> €</div>
                </div>
                <div class="row row-prenotazione justify-content-center">
                    <div class="col-lg-5">- Seleziona i lettini: </div>
                    <div class="col-lg-2">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="submit" class = "btn-lettini" value="+" name="aggiungi_lettino">
                        </form>
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="submit" class = "btn-lettini" value="-" name="rimuovi_lettino">
                        </form>
                    </div>
                    <div class="col-lg-1"><?php echo $counter_lettini; ?></div>
                    <div class="col-lg-1"><?php echo $saldo_lettini; ?> €</div>
                </div>
                <div class="row row-prenotazione justify-content-center">
                    <div class="col-lg-5">- Seleziona le sdraio: </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn-lettini">+</button>
                        <button type="button" class="btn-lettini">-</button>
                    </div>
                        <div class="col-lg-1"><?php echo $counter_sdraio ?></div>
                        <div class="col-lg-1"><?php echo ($sdraio*$counter_sdraio) ?> €</div>
                </div>
                <div class="row row-prenotazione justify-content-center">
                    <div class="col-lg-5">- Vuoi inserire anche una cabina?</div>
                    <div class="col-lg-2">
                        <button type="button" class="btn-lettini">+</button>
                        <button type="button" class="btn-lettini">-</button>
                    </div>
                        <div class="col-lg-1"><?php echo $counter_cabina ?></div>
                        <div class="col-lg-1"><?php echo ($cabina*$counter_cabina) ?> €</div>
                </div>
                
                <div class="row row-prenotazione justify-content-center">
                    <div class="col-lg-8">- Conto: </div>
                        <div class="col-lg-1"><?php echo $conto ?> €</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 offset-lg-8">
                        <button type="button" class="btn btn-primary" onclick="bottonePagamento(conto=<?php echo $conto ?>)">Procedi al modulo di pagamento</button>
                    </div>
                </div>
            </div>
        </div>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $( ".hamburger" ).on('click', function() {
                $(".menu").toggleClass("menu--open");
            });
        });
    </script>

    <!-- Buttons -->
    <script type="text/javascript">
        function bottonePagamento(conto) {
            window.open("http://localhost:3000/servizi/caricamento.php?conto=" + encodeURIComponent(conto));
        };
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