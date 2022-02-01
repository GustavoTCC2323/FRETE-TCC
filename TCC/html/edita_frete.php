<?php

    include_once('config.php');
    include 'logged.php';

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
    $idUsuario = $_POST['idUsuario'];
    $idFrete = $_POST['idFrete'];

    $sqlEditaUpdate = "UPDATE fretes SET nomeCompletoRemetente='$nomeCompletoRemetente',cpfRemetente='$cpfRemetente',cepRemetente='$cepRemetente',ruaRemetente='$ruaRemetente',numeroRemetente='$numeroRemetente',bairroRemetente='$bairroRemetente',cidadeRemetente='$cidadeRemetente',ufRemetente='$ufRemetente',nomeCompletoDestinatario='$nomeCompletoDestinatario',cpfDestinatario='$cpfDestinatario',cepDestinatario='$cepDestinatario',ruaDestinatario='$ruaDestinatario',numeroDestinatario='$numeroDestinatario',bairroDestinatario='$bairroDestinatario',cidadeDestinatario='$cidadeDestinatario',ufDestinatario='$ufDestinatario',pesoPacote='$pesoPacote',larguraPacote='$larguraPacote',alturaPacote='$alturaPacote',dataExpiracaoPacote='$dataExpiracaoPacote',obsPacote='$obsPacote'  WHERE idUser='$idUsuario' and id='$idFrete' ";

    $resultEdit = $conexao->query($sqlEditaUpdate);
    
    header("location:fretes_disponiveis-logged.php");
?>