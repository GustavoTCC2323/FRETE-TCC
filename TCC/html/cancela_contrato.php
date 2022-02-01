<?php

include_once('config.php');

$idFrete = $_POST['idFrete'];

$sqlUpdateContratado = "UPDATE fretes SET idContratado=0 WHERE id='$idFrete'";

$result = mysqli_query($conexao, $sqlUpdateContratado);

header("location:fretes_disponiveis-logged.php");

?>