<?php
    session_start();

    // recupero dei valori passati tramite l'url
    include('../../functions/geturls.php');
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    // set per il controllo delle variabili di sessione
    $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);

    // set delle variabili di sessione
    $_SESSION['id'] = $params['numero'];
    $_SESSION['conto'] = $params['costo'];
    $_SESSION['riga'] = $params['riga'];
    $_SESSION['colonna'] = $params['colonna'];
    $_SESSION['counter_lettini'] = 0;
    $_SESSION['saldo_lettini'] = 0;
    $_SESSION['counter_sdraio'] = 0;
    $_SESSION['saldo_sdraio'] = 0;
    $_SESSION['counter_cabina'] = 0;
    $_SESSION['saldo_cabina'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prenota il tuo ombrellone</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./static/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./static/img/favicon.ico" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Imprima:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great Vibes:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Voltaire:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<body>

    <!-- NAVBAR -->
    <div id="navbar-container"></div>
    <div class="load-html" data-container="navbar-container" data-source="/partials/navbar-bootstrap.html"></div>

    <!-- HERO -->
    <span id="hero-container"></span>
    <span class="load-html" data-container="hero-container" data-source="/partials/hero-prenotazione.html"></span>


    <div id="prenotazione">
        <div class="container box-prenotazione">

            <div class="row no-bg">
                <div class="col-lg-12"><h1>RIEPILOGO PRENOTAZIONE</h1></div>
            </div>

            <div class="row no-bg">
                <div class="alert col-lg-12">Prima di completare la prenotazione, scegli gli altri servizi da aggiungere</div>
            </div>

            <div class="row">
                <div class="col-lg-10">Ombrellone selezionato: <?php echo $params['numero']?></div>
                <div class="col-lg-2"><?php echo $params['costo']?> €</div>
            </div>

            <div class="row">
                <div class="col-lg-7">Seleziona i lettini: </div>
                <div class="col-lg-1">
                    <form id="aggiungi-lettino" action="#" method="post">
                        <button class="btn-prenotazione" type='submit' name="aggiungiLettino">+</button>
                    </form>
                </div>
                <div id="counter-lettini" class="col-lg-1">
                    <?php echo $_SESSION['counter_lettini']; ?>
                </div>
                <div class="col-lg-1">
                    <form id="rimuovi-lettino" action="#" method="post">
                        <button class="btn-prenotazione" type='submit' name="rimuoviLettino">-</button>
                    </form>
                </div>
                <div id="saldo-lettini" class="col-lg-2">
                    <?php echo $_SESSION['saldo_lettini']." €"; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7">Seleziona le sdraio: </div>
                <div class="col-lg-1">
                    <form id="aggiungi-sdraio" action="#" method="post">
                        <button class="btn-prenotazione" type='submit' name="aggiungiSdraio">+</button>
                    </form>
                </div>
                <div id="counter-sdraio" class="col-lg-1">
                    <?php echo $_SESSION['counter_sdraio']; ?>
                </div>
                <div class="col-lg-1">
                    <form id="rimuovi-sdraio" action="#" method="post">
                        <button class="btn-prenotazione" type='submit' name="rimuoviSdraio">-</button>
                    </form>
                </div>
                <div id="saldo-sdraio" class="col-lg-2">
                    <?php echo $_SESSION['saldo_sdraio']." €"; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7">Vuoi inserire anche una cabina?</div>
                <div class="col-lg-1">
                    <form id="aggiungi-cabina" action="#" method="post">
                        <button class="btn-prenotazione" type='submit' name="aggiungiCabina">+</button>
                    </form>
                </div>
                <div id="counter-cabina" class="col-lg-1">
                    <?php echo $_SESSION['counter_cabina']; ?>
                </div>
                <div class="col-lg-1">
                    <form id="rimuovi-cabina" action="#" method="post">
                        <button class="btn-prenotazione" type='submit' name="rimuoviCabina">-</button>
                    </form>
                </div>
                <div id="saldo-cabina" class="col-lg-2">
                    <?php echo $_SESSION['saldo_cabina']." €"; ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10">Conto: </div>
                <div id="conto" class="col-lg-2">
                    <?php echo $_SESSION['conto']." €"; ?>
                </div>
            </div>

            <div class="row no-bg">
                <div class="col-lg-4 offset-lg-8">
                    <button type="button" class="btn btn-primary" onclick="bottonePagamento(conto=<?php echo $_SESSION['conto']; ?>, id=<?php echo $_SESSION['id']; ?>, riga=<?php echo $_SESSION['riga']; ?>, colonna='<?php echo $_SESSION['colonna']; ?>')">Procedi al modulo di pagamento</button>
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
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
    <script type="text/javascript" src="/static/js/hamburger.js"></script>

    <!-- Buttons -->
    <script type="text/javascript" src="/static/js/buttons.js"></script>

    <!-- Buttons Prenotazione -->
    <script type="text/javascript" src="/static/js/pagina-prenotazione.js"></script>

    <!-- Load HTML -->
    <script type="text/javascript" src="/static/js/load-html.js"></script>

    <!-- Navbar -->
    <script type="text/javascript" src="/static/js/navbar.js"></script>

</body>
</html>