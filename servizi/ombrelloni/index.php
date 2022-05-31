<?php
    // Cancellazione delle variabili di sessione
    if (isset($_SESSION['previous'])) {
        if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
            session_destroy();
        }
    }

    // connessione e query di select nel DB
    include('../../functions/connection.php');
    $DB = new DB("localhost","postgres","postgres","lido","5432");
    $table = $DB->getTable("umbrellas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ombrelloni</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/static/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/static/img/favicon.ico" type="image/x-icon">

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
    <span class="load-html" data-container="hero-container" data-source="/partials/hero-ombrelloni.html"></span>


    <div id="ombrelloni">

        <h1>PRENOTA IL TUO OMBRELLONE</h1>

        <div class="flexbox-container">
            <?php
                // set delle variabili da usare per la costruzione della griglia
                $n_riga = 1;
                $n_colonna;
                $n_umbrella = 400;
                $costo_fila = 15;
                $numero_fila = 20;
                foreach($table as $i => $row) {
                    echo "<div class=\"row\">";
                    foreach($row as $j => $column) {
                        $n_colonna = $j;
                        if ($j == "ID") {
                            echo "<div class=\"item-id\">";
                            echo "Fila n°".$numero_fila.": ".$costo_fila . "€";
                            echo "</div>";
                            continue;
                        }
                        else {
                            echo "<div class=\"item\">";
                            if ($row[$j] == "t") {
                                echo "<button type=\"button\" class=\"btn btn-umbrella\" onclick=\"buttonChoise(numero=".$n_umbrella.", costo=".$costo_fila.", riga=".$n_riga.", colonna='$n_colonna')\"><strong>".$n_umbrella."</strong></button>";
                            }
                            else {
                                echo "<button type=\"button\" class=\" btn btn-umbrella\" onclick=\"buttonAlert()\" disabled>".$n_umbrella."</button>";
                            }
                            $n_umbrella -= 1;
                            echo "</div>";
                        }
                    }
                    $costo_fila += 1;
                    $numero_fila -= 1;
                    $n_riga += 1;
                    echo "</div>";
                    //echo "<hr>";
                }      
            ?>
        </div>
    </div>
    
    



    <!-- FOOTER -->
    <span id="footer-container"></span>
    <span class="load-html" data-container="footer-container" data-source="/partials/footer.html"></span>



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