<?php
    // parte che gestisce il passaggio di parametri tramite l'url da una pagina all'altra
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https";
    else {
        $url = "http";
    }

    $url .= "://";

    $url .= $_SERVER['HTTP_HOST'];

    $url .= $_SERVER['REQUEST_URI'];
?>