<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sunsea Resort</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./static/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./static/img/favicon.ico" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Imprima:wght@300;400;700;900&display=swap">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Great Vibes:wght@300;400;700;900&display=swap">
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
<span class="load-html" data-container="hero-container" data-source="/partials/hero-home.html"></span>


<!-- SERVIZI -->
<span id="servizi-container"></span>
<span class="load-html" data-container="servizi-container" data-source="/partials/servizi.html"></span>


<!-- GALLERIA-->
<span id="galleria-container"></span>
<span class="load-html" data-container="galleria-container" data-source="/partials/galleria.html"></span>


<!-- CONTATTI -->
<span id="contact-container"></span>
<span class="load-html" data-container="contact-container" data-source="/partials/contact.html"></span>


<!-- FOOTER -->
<span id="footer-container"></span>
<span class="load-html" data-container="footer-container" data-source="/partials/footer.html"></span>


<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Coockie -->
<script type="text/javascript" src="/static/js/coockie.js"></script>

<!-- Hamburger -->
<script type="text/javascript" src="/static/js/hamburger.js"></script>

<!-- Load HTML -->
<script type="text/javascript" src="/static/js/load-html.js"></script>

<!-- Navbar -->
<script type="text/javascript" src="/static/js/navbar.js"></script>

<!-- Contatti -->
<script type="text/javascript" src="/static/js/contatti.js"></script>

<!-- Animazioni -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>