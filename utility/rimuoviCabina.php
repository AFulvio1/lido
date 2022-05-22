<?php
    session_start();
    if ($_SESSION['counter_cabina'] > 0) {
        $_SESSION['counter_cabina']--;
        $_SESSION['saldo_cabina'] -= 5;
        $_SESSION['conto'] -= 5;
        $result = array('counter' => $_SESSION['counter_cabina'], 'saldo' =>  $_SESSION['saldo_cabina'], 'conto' => $_SESSION['conto']);
        echo json_encode($result);
        exit();
    }
    else {
        $result = array('counter' => $_SESSION['counter_cabina'], 'saldo' =>  $_SESSION['saldo_cabina'], 'conto' => $_SESSION['conto']);
        echo json_encode($result);
        exit();
    }
?>