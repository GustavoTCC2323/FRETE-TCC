<?php

include_once("./config.php");
include_once("./logged.php");

$sqlFrete = "SELECT * FROM fretes WHERE idContratado = $id";

$resultado = mysqli_query($conexao, $sqlFrete);

?>