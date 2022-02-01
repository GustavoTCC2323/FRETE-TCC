<?php

include_once("./config.php");
include_once("./logged.php");

$sqlByMe = "SELECT * FROM fretes WHERE idUser = $id";

$resultadoByMe = mysqli_query($conexao, $sqlByMe);

?>