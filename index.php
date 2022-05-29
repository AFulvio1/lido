<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Lido</title>

    <?php
    $home_path = $_SERVER['REQUEST_URI'];
    $home_path_length = strlen($home_path)-1;
    $home_path = substr($home_path, 0, $home_path_length);
    ?>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./static/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href=".<?php echo $home_path; ?>/static/img/favicon.ico" type="image/x-icon">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Imprima:wght@300;400;700;900&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great Vibes:wght@300;400;700;900&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Voltaire:wght@300;400;700;900&display=swap">
  <link rel="stylesheet" href="<?php echo $home_path; ?>/static/css/style.css">
  <link rel="stylesheet" href="<?php echo $home_path; ?>/static/css/style-antonio.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="<?php echo $home_path; ?>/static/css/coockie.css" async>
</head>

<body>
  
  <!-- NAVBAR -->
  <span id="navbar-container"></span>
  <span class="load-html" data-container="navbar-container" data-source="<?php echo $home_path; ?>/partials/navbar-bootstrap.html"></span>


  <!-- HERO -->
  <span id="hero-container"></span>
  <span class="load-html" data-container="hero-container" data-source="<?php echo $home_path; ?>/partials/hero-home.html"></span>


  <!-- SERVIZI -->
  <span id="servizi-container"></span>
  <span class="load-html" data-container="servizi-container" data-source="<?php echo $home_path; ?>/partials/servizi.html"></span>


  <!-- GALLERIA-->
  <span id="galleria-container"></span>
  <span class="load-html" data-container="galleria-container" data-source="<?php echo $home_path; ?>/partials/galleria.html"></span>


  <!-- CONTATTI -->
  <span id="contact-container"></span>
  <span class="load-html" data-container="contact-container" data-source="<?php echo $home_path; ?>/partials/contact.html"></span>

 
  <!-- FOOTER -->
  <span id="footer-container"></span>
  <span class="load-html" data-container="footer-container" data-source="<?php echo $home_path; ?>/partials/footer.html"></span>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Coockie -->
  <script src="/static/js/coockie.js"></script>

  <!-- Hamburger -->
  <script type="text/javascript">
    $(document).ready(function() {
      $( ".hamburger" ).on('click', function() {
        $(".menu").toggleClass("menu--open");
      });
    });
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

  <!-- Contatti -->
  <script src="/static/js/contatti.js"></script>
    
</body>

</html>