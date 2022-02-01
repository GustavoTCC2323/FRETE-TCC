<?php
    include_once("./config.php");
    session_start();
    if (!isset($_SESSION['id']) == true) {
        header('location:index.php');
    }

    $id = $_SESSION['id'];
    $logado = explode(' ', $_SESSION['nome'])[0];

?>