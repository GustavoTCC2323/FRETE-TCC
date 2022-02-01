<?php

    include_once('config.php');
    include 'logged.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];

    $sqlUpdate = "UPDATE users SET nome='$nome',email='$email',senha='$senha',cep='$cep',rua='$rua',numero='$numero',bairro='$bairro',cidade='$cidade',uf='$uf',cpf='$cpf',data_nascimento='$data_nascimento' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
    
    header("location:minha_conta-logged.php");
?>