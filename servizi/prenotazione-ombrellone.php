<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenota il tuo ombrellone!</title>
</head>
<body>
    <h1>RIEPILOGO PRENOTAZIONE</h1>

    <?php
        include("geturls.php");
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        echo ' Numero '.$params['n'];
        echo ' Costo '.$params['c'];        
    ?>
</body>
</html>