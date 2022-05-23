<?php
    session_start();
    $_SESSION['counter_cabina']++;
    $_SESSION['saldo_cabina'] += 5;
    $_SESSION['conto'] += 5;
    $result = array('counter' => $_SESSION['counter_cabina'], 'saldo' =>  $_SESSION['saldo_cabina'], 'conto' => $_SESSION['conto']);
    echo json_encode($result);
    exit();
?>