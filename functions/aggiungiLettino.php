<?php
    // parte che aggiorna tutte le variabili all'aggiunta di un lettino
    session_start();
    $_SESSION['counter_lettini']++;
    $_SESSION['saldo_lettini'] += 5;
    $_SESSION['conto'] += 5;
    $result = array('counter' => $_SESSION['counter_lettini'], 'saldo' =>  $_SESSION['saldo_lettini'], 'conto' => $_SESSION['conto']);
    echo json_encode($result);
    exit();
?>