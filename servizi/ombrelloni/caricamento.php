<?php
    include("../../functions/geturls.php");
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    $id = $params['id'];
    $riga = $params['riga'];
    $colonna = $params['colonna'];
    $conto = $params['conto'];

    include('../../functions/connection.php');
    $db = new DB("localhost","postgres","postgres","lido","5432");
    $db->setValue("umbrellas", $riga, $colonna);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trasferimento al modulo di pagamento...</title>

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
<body style="background-color: #57AEE7;">
    <div id="caricamento">
        <div id="loader-container">
            <div id="loader-one" class="loader"></div>
            <div id="loader-two" class="loader"></div>
            <div id="loader-three" class="loader"></div>
        </div>
        <h1>STAI PER ESSERE TRASFERITO AL MODULO DI PAGAMENTO . . .</h1>
        <hr>
        <h1> <?php echo "Ombrellone n°".$id." - Totale: ".$conto." €"; ?> </h1>
    </div>
    



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

    <!-- Load HTML -->
    <script type="text/javascript" src="/static/js/load-html.js"></script>

    <!-- Navbar -->
    <script type="text/javascript" src="/static/js/navbar.js"></script>

</body>
</html>