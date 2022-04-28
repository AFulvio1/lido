<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Lido</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="./static/img//favicon.ico" type="image/x-icon">
      <link rel="icon" href="./static/img//favicon.ico" type="image/x-icon">

      <!-- Stylesheets -->
      <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre Baskerville:wght@300;400;700;900&display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Voltaire:wght@300;400;700;900&display=swap">
      <link rel="stylesheet" href="/static/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" href="/static/css/coockie.css" async>
  </head>

  <body>
    <!-- SCROLLSPY -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-container" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    
    <!-- NAVBAR -->
    <div id="navbar-container"></div>
    <div class="load-html" data-container="navbar-container" data-source="/partial/navbar.html"></div>
        
    <!-- HERO -->
    <div id="hero-container"></div>
    <div class="load-html" data-container="hero-container" data-source="/partial/hero.html"></div>

    <!-- POSTER -->
    <div id="poster-container"></div>
    <div class="load-html" data-container="poster-container" data-source="/partial/poster.html"></div>

    <!-- SERVIZI -->
    <div id="services-container"></div>
    <div class="load-html" data-container="services-container" data-source="/partial/services.html"></div>


    <!-- GALLERIA-->
    <div id="galleria-container"></div>
    <div class="load-html" data-container="galleria-container" data-source="/partial/galleria.html"></div>


    <!-- CONTATTI DA FARE -->
    <div id="contact-container"></div>
    <div class="load-html" data-container="contact-container" data-source="/partial/contact.html"></div>

    <!-- FOOTER DA FARE -->
    <div id="footer-container"></div>
    <div class="load-html" data-container="footer-container" data-source="/partial/footer.html"></div>
      
      
    



 

    

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

    <script>
      var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: '#navbar-container'
      })
    </script>
      

  </body>

</html>