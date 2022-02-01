<?php

include_once('config.php');

if(!empty($_GET['id'])) {
    $data = $_GET['id'];
    $sqlFrete = "SELECT * FROM fretes WHERE id = $data";
}

$result = $conexao->query($sqlFrete);
$linha = $result->fetch_assoc();

?>