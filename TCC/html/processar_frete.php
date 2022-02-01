<?php

    include_once('config.php');
    $nomeCompletoRemetente = $_POST['nomeCompletoRemetente'];
    $cpfRemetente = $_POST['cpfRemetente'];
    $cepRemetente = $_POST['cepRemetente'];
    $ruaRemetente = $_POST['ruaRemetente'];
    $numeroRemetente = $_POST['numeroRemetente'];
    $bairroRemetente = $_POST['bairroRemetente'];
    $cidadeRemetente = $_POST['cidadeRemetente'];
    $ufRemetente = $_POST['ufRemetente'];
    $nomeCompletoDestinatario = $_POST['nomeCompletoDestinatario'];
    $cpfDestinatario = $_POST['cpfDestinatario'];
    $cepDestinatario = $_POST['cepDestinatario'];
    $ruaDestinatario = $_POST['ruaDestinatario'];
    $numeroDestinatario = $_POST['numeroDestinatario'];
    $bairroDestinatario = $_POST['bairroDestinatario'];
    $cidadeDestinatario = $_POST['cidadeDestinatario'];
    $ufDestinatario = $_POST['ufDestinatario'];
    $pesoPacote = $_POST['pesoPacote'];
    $larguraPacote = $_POST['larguraPacote'];
    $alturaPacote = $_POST['alturaPacote'];
    $valorPacote = $_POST['valorPacote'];
    $dataExpiracaoPacote = $_POST['dataExpiracaoPacote'];
    $obsPacote = $_POST['obsPacote'];
    $idUser = $_POST['idUser'];
    $idContratado = '0';

    if(mysqli_query($conexao, "INSERT INTO fretes(nomeCompletoRemetente,cpfRemetente,cepRemetente,ruaRemetente,numeroRemetente,bairroRemetente,cidadeRemetente,ufRemetente,nomeCompletoDestinatario,cpfDestinatario,cepDestinatario,ruaDestinatario,numeroDestinatario,bairroDestinatario,cidadeDestinatario,ufDestinatario,pesoPacote,larguraPacote,alturaPacote,valorPacote,dataExpiracaoPacote,obsPacote,idUser,idContratado) VALUES ('$nomeCompletoRemetente','$cpfRemetente','$cepRemetente','$ruaRemetente','$numeroRemetente','$bairroRemetente','$cidadeRemetente','$ufRemetente','$nomeCompletoDestinatario','$cpfDestinatario','$cepDestinatario','$ruaDestinatario','$numeroDestinatario','$bairroDestinatario','$cidadeDestinatario','$ufDestinatario','$pesoPacote','$larguraPacote','$alturaPacote','$valorPacote','$dataExpiracaoPacote','$obsPacote','$idUser','$idContratado')")) {
        header("Location: ./fretes_disponiveis-logged.php");
      } else {
        header("Location: ./register_login.php");
        echo mysqli_error($conexao);
      }


?>