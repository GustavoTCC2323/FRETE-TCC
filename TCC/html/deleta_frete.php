<?php

    include_once('config.php');

    $idFrete = $_GET['id'];

    $sqlSelect = "SELECT * FROM fretes WHERE id=$idFrete";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM fretes WHERE id=$idFrete";
        $resultDelete = $conexao->query($sqlDelete);
    }
    
    header("location:minha_conta-logged.php");