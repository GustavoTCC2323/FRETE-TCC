<?php

include("./logged.php");
include("./exibe_id.php")

?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../images/favicon-32x32.png" type="image/x-icon" />

    <script src="../js/scroll.js"></script>
    <script src="../js/consulta_cep.js"></script>
    <script src="../js/consulta_cep1.js"></script>
    <script src="../js/formatar.js"></script>
    <script src="../js/formata_moeda.js"></script>
    <script src="../js/formata_peso.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <title>CADASTRO DE FRETES | TCC - Bernardo e Gustavo</title>

</head>

<body style="background-color: #eee;">
    <!--HEADER-->
    <div id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index-logged.php">
                        <img src="../images/logo.png" width="50px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mob-navbar">
                        <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./index-logged.php">PÁGINA INICIAL</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">FRETES</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="./fretes_disponiveis-logged.php">Fretes Disponíveis</a></li>
                                    <li><a class="dropdown-item" href="./cadastro-fretes-logged.php">Cadastrar Fretes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about_us-logged.php">SOBRE NÓS</a>
                            </li>
                        </ul>
                        <div class="">
                            <form action="./sair.php" method="POST" id="formUser">
                                <?php
                                echo "<span class='rounded p-1 bg-success bg-gradient text-white fw-bold'>Olá, $logado</span>";
                                ?>
                                <a href="./minha_conta-logged.php" class="ms-5 btn btn-outline-dark fw-bold">minha conta</a>

                                <input type="submit" value="sair" class="ms-0 btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--HEADER-->

    <!--SLIDER-->

    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-0">
                <div class="cadastro-fretes-form">
                    <form action="./processar_frete.php" method="POST" class="my-5 border p-4 shadow bg-light bg-gradient">
                        <h4 class=" mb-5 text-secondary">Cadastro de frete</h4>
                        <h5 class="mb-4 text-primary text-center fw-bolder">Remetente</h5>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>Nome completo<span class="text-danger">*</span></label>
                                <input type="text" name="nomeCompletoRemetente" class="form-control" value="<?php echo $row['nome'] ?>" placeholder="Digite seu nome completo" readonly required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label>CPF<span class="text-danger">*</span></label>
                                <input type="text" name="cpfRemetente" id="cpf" class="form-control" value="<?php echo $row['cpf'] ?>" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" readonly required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label>CEP<span class="text-danger">*</span></label>
                                <input name="cepRemetente" type="text" id="cep" value="" size="10" maxlength="10" class="form-control" placeholder="CEP" OnKeyPress="formatar('##.###-###', this)" onblur="pesquisacep(this.value);" required />
                            </div>
                            <div class="mb-3 col-md-7">
                                <label>Logradouro<span class="text-danger">*</span></label>
                                <input name="ruaRemetente" type="text" id="rua" value="" class="form-control" placeholder="Rua" required />
                            </div>
                            <div class="mb-3 col-md-1">
                                <label>Número<span class="text-danger">*</span></label>
                                <input name="numeroRemetente" type="text" id="numero" value="" class="form-control" placeholder="Nº" required />
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>Bairro<span class="text-danger">*</span></label>
                                <input name="bairroRemetente" type="text" id="bairro" value="" class="form-control" placeholder="Bairro" required />
                            </div>
                            <div class="mb-3 col-md-5">
                                <label>Cidade<span class="text-danger">*</span></label>
                                <input name="cidadeRemetente" type="text" id="cidade" value="" class="form-control" placeholder="Cidade" required />
                            </div>
                            <div class="mb-3 col-md-2">
                                <label>Estado<span class="text-danger">*</span></label>
                                <input name="ufRemetente" type="text" id="uf" value="" class="form-control" placeholder="UF" required />
                            </div>
                            <h5 class="mb-4 mt-4 text-primary text-center fw-bolder">Destinatário</h5>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label>Nome completo<span class="text-danger">*</span></label>
                                    <input type="text" name="nomeCompletoDestinatario" class="form-control" placeholder="Digite o nome completo" required>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label>CPF<span class="text-danger">*</span></label>
                                    <input type="text" name="cpfDestinatario" id="cpf1" maxlength="14" class="form-control" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" required>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label>CEP<span class="text-danger">*</span></label>
                                    <input name="cepDestinatario" type="text" id="cep1" value="" size="10" maxlength="10" class="form-control" placeholder="CEP" OnKeyPress="formatar('##.###-###', this)" onblur="pesquisacep1(this.value);" required />
                                </div>
                                <div class="mb-3 col-md-7">
                                    <label>Logradouro<span class="text-danger">*</span></label>
                                    <input name="ruaDestinatario" type="text" id="rua1" value="" class="form-control" placeholder="Rua" required />
                                </div>
                                <div class="mb-3 col-md-1">
                                    <label>Número<span class="text-danger">*</span></label>
                                    <input name="numeroDestinatario" type="text" id="numero1" value="" class="form-control" placeholder="Nº" required />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label>Bairro<span class="text-danger">*</span></label>
                                    <input name="bairroDestinatario" type="text" id="bairro1" value="" class="form-control" placeholder="Bairro" required />
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label>Cidade<span class="text-danger">*</span></label>
                                    <input name="cidadeDestinatario" type="text" id="cidade1" value="" class="form-control" placeholder="Cidade" required />
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label>Estado<span class="text-danger">*</span></label>
                                    <input name="ufDestinatario" type="text" id="uf1" value="" class="form-control" placeholder="UF" required />
                                </div>

                            </div>
                            <h5 class="mb-4 text-primary text-center fw-bolder">Dados do pacote</h5>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label>Peso<span class="text-danger">*</span></label>
                                    <input type="text" name="pesoPacote" id="peso" class="form-control" placeholder="kg" required>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label>Largura<span class="text-danger">*</span></label>
                                    <input type="text" name="larguraPacote" class="form-control" placeholder="cm" required>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label>Altura<span class="text-danger">*</span></label>
                                    <input name="alturaPacote" type="text" class="form-control" placeholder="cm" required />
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label>Valor<span class="text-danger">*</span></label>
                                    <input name="valorPacote" type="text" class="form-control" placeholder="R$" onKeyPress="return(moeda(this,'.',',',event))" required />
                                </div>
                                <div class="mb-3 col-md-7">
                                    <label>Data de expiração<span class="text-danger">*</span></label>
                                    <input name="dataExpiracaoPacote" maxlength="10" type="date" class="form-control" placeholder="DD/MM/AAAA" OnKeyPress="formatar('##/##/####', this)" required />
                                </div>
                                <div class="mb-3 col-md-12 row-md-12 ">
                                    <label>Descrição<span class="text-danger">*</span></label>
                                    <input name="obsPacote" type="text" id="bairro" maxlength="100" class="form-control" placeholder="Descreva o produto (leve/pesado e pequeno/grande) e o tipo de transporte necessário (moto/carro/caminhão)" required />
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" name="idUser" value="<?php echo $row['id'] ?>">
                                    <input type="hidden" name="idContratado" value="0">
                                    <input class="btn btn-primary float-end" type="submit" value="Enviar">
                                </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <!--SLIDER-->

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>