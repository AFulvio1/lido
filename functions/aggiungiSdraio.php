<?php
    session_start();
    $_SESSION['counter_sdraio']++;
    $_SESSION['saldo_sdraio'] += 5;
    $_SESSION['conto'] += 5;
    $result = array('counter' => $_SESSION['counter_sdraio'], 'saldo' =>  $_SESSION['saldo_sdraio'], 'conto' => $_SESSION['conto']);
    echo json_encode($result);
    exit();
?>