<?php

include_once('config.php');

  $nome = $_POST['nomeCompletoRegister'];
  $email = $_POST['emailRegister'];
  $senha = $_POST['passwordRegister'];
  $cep = $_POST['cep'];
  $rua = $_POST['rua'];
  $numero = $_POST['numero'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $uf = $_POST['uf'];
  $cpf = $_POST['cpf'];
  $data_nascimento = $_POST['data_nascimento'];

  if(mysqli_query($conexao, "INSERT INTO users(nome,email,senha,cep,rua,numero,bairro,cidade,uf,cpf,data_nascimento) VALUES ('$nome','$email','$senha','$cep','$rua','$numero','$bairro','$cidade','$uf','$cpf','$data_nascimento')")) {
    header("Location: ./login-page.php");
  } else {
    header("Location: ./register_login.php");
    echo mysqli_error($conexao);
  }
