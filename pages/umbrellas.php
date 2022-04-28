<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lido</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/static/img//favicon.ico" type="image/x-icon">
    <link rel="icon" href="./static/img//favicon.ico" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre Baskerville:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Voltaire:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="/static/css/coockie.css" async>
</head>
<body>

    <!-- NAVBAR -->
    <span id="navbar-container"></span>
    <span class="load-html" data-container="navbar-container" data-source="/partial/navbar.html"></span>

    <h2>PRENOTA IL TUO OMBRELLONE</h2>

    <?php
        include("response.php");
        $newObj = new Table("localhost","postgres","postgres","lido","5432");
        $table = $newObj->getTable("umbrellas");
    ?>
   
    <!-- Inserire commenti -->
    <div class="flexbox-container">
        <?php
            $n_umbrella = 400;
            foreach($table as $i => $row) {
                //echo "<div class=\"grid-container\">";
                foreach($row as $j => $column) {
                    if ($j == "ID") {
                        continue;
                    }
                    else {
                        echo "<div class=\"item\">";
                        if ($row[$j] == "t") {
                            echo "<button type=\"button\" class=\"btn btn-success btn-umbrella\" onclick=\"buttonChoise()\">" . $n_umbrella . "</button>";
                        }
                        else {
                            echo "<button type=\"button\" class=\"btn btn-danger btn-umbrella\" onclick=\"buttonAlert()\">" . $n_umbrella . "</button>";
                        }
                        $n_umbrella -= 1;
                        echo "</div>";
                    }
                }
                //echo "</div>";
            }      
        ?>
    </div>
    
    



    <!-- FOOTER DA FARE -->
    <span id="footer-container"></span>
    <span class="load-html" data-container="footer-container" data-source="/partial/footer.html"></span>


    
    <!-- SCRIPTS
    <span id="scripts-container"></span>
    <span class="load-html" data-container="scripts-container" data-source="/partial/scripts.html"></span> -->

    <!-- Bootstrap -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>

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

    <!-- Navbar -->
    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll',function(){
            if (window.pageYOffset > 100){
                nav.classList.add('bg-dark','shadow');
            }
            else{
                nav.classList.remove('bg-dark','shadow');
            }
        })
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

    
</body>
</html>