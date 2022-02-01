<?php

include_once('config.php');

    $email = $_POST['emailLogin'];
    $senha = $_POST['passwordLogin'];

    $sql = "SELECT * FROM users WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if($result->num_rows > 0) {
        
        // LOGIN REALIZADO
        
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $_POST['emailLogin'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['id'] = $row['id'];

        header("Location: ./index-logged.php");
    } else {
        
        // FALHA NO LOGIN

        unset($_SESSION['email']);
        
        header("Location: ./login-page.php");
    }
