<?php

include_once('config.php');

$idContratado = $_POST['idUsuario'];
$idFrete = $_POST['idFrete'];

$sqlUpdateContratado = "UPDATE fretes SET idContratado='$idContratado' WHERE id='$idFrete'";

$result = mysqli_query($conexao, $sqlUpdateContratado);

header("location:minha_conta-logged.php");

?>