<?php
    // Program to display URL of current page.
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https";
    else {
        $url = "http";
    }
      
    // Here append the common URL characters.
    $url .= "://";
      
    // Append the host(domain name, ip) to the URL.
    $url .= $_SERVER['HTTP_HOST'];
      
    // Append the requested resource location to the URL
    $url .= $_SERVER['REQUEST_URI'];
?>