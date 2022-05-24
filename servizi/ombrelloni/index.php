<?php
    if (isset($_SESSION['previous'])) {
        if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
            session_destroy();
        }
    }

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
    <div id="navbar-container"></div>
    <div class="load-html" data-container="navbar-container" data-source="/partials/navbar-bootstrap.html"></div>

    <!-- HERO -->
    <span id="hero-container"></span>
    <span class="load-html" data-container="hero-container" data-source="/partials/hero-ombrelloni.html"></span>

    <div id="ombrelloni">

        <h1>PRENOTA IL TUO OMBRELLONE</h1>

        <!-- Inserire commenti -->
        <div class="flexbox-container">
            <?php
                $n_riga;
                $n_colonna;
                $n_umbrella = 400;
                $costo_fila = 15;
                //echo "<hr>";
                foreach($table as $i => $row) {
                    $n_riga = $i;
                    echo "<div class=\"row\">";
                    foreach($row as $j => $column) {
                        $n_colonna = $j;
                        if ($j == "ID") {
                            echo "<div class=\"item-id\"><strong>";
                            echo $costo_fila . "€";
                            echo "</strong></div>";
                            continue;
                        }
                        else {
                            echo "<div class=\"item\">";
                            if ($row[$j] == "t") {
                                echo "<button type=\"button\" class=\"btn btn-umbrella\" onclick=\"buttonChoise(numero=".$n_umbrella.", costo=".$costo_fila.", riga=".$n_riga.", colonna=".$n_colonna.")\"><strong>".$n_umbrella."</strong></button>";
                            }
                            else {
                                echo "<button type=\"button\" class=\" btn btn-umbrella\" onclick=\"buttonAlert()\" disabled>".$n_umbrella."</button>";
                            }
                            $n_umbrella -= 1;
                            echo "</div>";
                        }
                    }
                    $costo_fila += 1;
                    echo "</div>";
                    //echo "<hr>";
                }      
            ?>
        </div>
    </div>
    
    



    <!-- FOOTER DA FARE -->
    <span id="footer-container"></span>
    <span class="load-html" data-container="footer-container" data-source="/partials/footer.html"></span>


    
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
            $(".hamburger").on('click', function() {
            $(".menu").toggleClass("menu--open");
            });
        });
    </script>

    <!-- Buttons -->
    <script type="text/javascript">
        function buttonChoise(numero,costo,riga,colonna) {
            /** choise: true if ok, false else */
            var choise = confirm("Vuoi confermare la scelta?");
            if (choise == true) {
                window.open("http://localhost:3000/servizi/ombrelloni/prenotazione-ombrellone.php?numero=" + encodeURIComponent(numero) + "&costo=" + encodeURIComponent(costo) + "&riga=" + encodeURIComponent(riga) + "&colonna=" + encodeURIComponent(colonna));
            }
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