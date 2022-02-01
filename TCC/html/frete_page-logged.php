<?php

include("./logged.php");
include("./exibe_id.php");
include("./frete_view.php")

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
    <title>VISUALIZAR FRETE | TCC - Bernardo e Gustavo</title>

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
                    <form action="./processar_contrato.php" method="POST" class="my-5 border p-4 bg-dark text-light shadow">
                        <h4 class=" mb-5 text-secondary">Iniciar serviço</h4>
                        <h5 class="mb-4 text-warning text-center fw-bolder">Remetente</h5>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>Nome completo</label>
                                <input type="text" name="nomeCompletoRemetente" class="form-control" value="<?php echo $linha['nomeCompletoRemetente'] ?>" placeholder="Digite seu nome completo" readonly required>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label>CPF</label>
                                <input type="password" name="cpfRemetente" id="cpf" class="form-control" value="<?php echo $linha['cpfRemetente'] ?>" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" readonly required>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label>CEP</label>
                                <input name="cepRemetente" type="text" id="cep" size="10" maxlength="10" class="form-control" value="<?php echo $linha['cepRemetente'] ?>" placeholder="CEP" OnKeyPress="formatar('##.###-###', this)" onblur="pesquisacep(this.value);" readonly required />
                            </div>
                            <div class="mb-3 col-md-7">
                                <label>Logradouro</label>
                                <input name="ruaRemetente" type="text" id="rua" value="<?php echo $linha['ruaRemetente'] ?>" class="form-control" placeholder="Rua" readonly required />
                            </div>
                            <div class="mb-3 col-md-1">
                                <label>Número</label>
                                <input name="numeroRemetente" type="text" id="numero" value="<?php echo $linha['numeroRemetente'] ?>" class="form-control" placeholder="Nº" readonly required />
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>Bairro</label>
                                <input name="bairroRemetente" type="text" id="bairro" value="<?php echo $linha['bairroRemetente'] ?>" class="form-control" placeholder="Bairro" readonly required />
                            </div>
                            <div class="mb-3 col-md-5">
                                <label>Cidade</label>
                                <input name="cidadeRemetente" type="text" id="cidade" value="<?php echo $linha['cidadeRemetente'] ?>" class="form-control" placeholder="Cidade" readonly required />
                            </div>
                            <div class="mb-3 col-md-2">
                                <label>Estado</label>
                                <input name="ufRemetente" type="text" id="uf" value="<?php echo $linha['ufRemetente'] ?>" class="form-control" placeholder="UF" readonly required />
                            </div>
                            <h5 class="mb-4 mt-4 text-warning text-center fw-bolder">Destinatário</h5>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label>Nome completo</label>
                                    <input type="text" name="nomeCompletoDestinatario" class="form-control" value="<?php echo $linha['nomeCompletoDestinatario'] ?>" placeholder="Digite o nome completo" readonly required>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label>CPF</label>
                                    <input type="password" name="cpfDestinatario" id="cpf1" maxlength="14" value="<?php echo $linha['cpfDestinatario'] ?>" class="form-control" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" readonly required>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label>CEP</label>
                                    <input name="cepDestinatario" type="text" id="cep1" size="10" value="<?php echo $linha['cepDestinatario'] ?>" maxlength="10" class="form-control" placeholder="CEP" OnKeyPress="formatar('##.###-###', this)" onblur="pesquisacep1(this.value);" readonly required />
                                </div>
                                <div class="mb-3 col-md-7">
                                    <label>Logradouro</label>
                                    <input name="ruaDestinatario" type="text" id="rua1" value="<?php echo $linha['ruaDestinatario'] ?>" class="form-control" placeholder="Rua" readonly required />
                                </div>
                                <div class="mb-3 col-md-1">
                                    <label>Número</label>
                                    <input name="numeroDestinatario" type="text" id="numero1" value="<?php echo $linha['numeroDestinatario'] ?>" class="form-control" placeholder="Nº" readonly required />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label>Bairro</label>
                                    <input name="bairroDestinatario" type="text" id="bairro1" value="<?php echo $linha['bairroDestinatario'] ?>" class="form-control" placeholder="Bairro" readonly required />
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label>Cidade</label>
                                    <input name="cidadeDestinatario" type="text" id="cidade1" value="<?php echo $linha['cidadeDestinatario'] ?>" class="form-control" placeholder="Cidade" readonly required />
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label>Estado</label>
                                    <input name="ufDestinatario" type="text" id="uf1" value="<?php echo $linha['ufDestinatario'] ?>" class="form-control" placeholder="UF" readonly required />
                                </div>

                            </div>
                            <h5 class="mb-4 text-warning text-center fw-bolder">Dados do pacote</h5>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label>Peso</label>
                                    <input type="text" name="pesoPacote" value="<?php echo $linha['pesoPacote'] ?> kg" id="peso" class="form-control" placeholder="kg" readonly required>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label>Largura</label>
                                    <input type="text" name="larguraPacote" value="<?php echo $linha['larguraPacote'] ?> cm" class="form-control" placeholder="cm" readonly required>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label>Altura</label>
                                    <input name="alturaPacote" type="text" value="<?php echo $linha['alturaPacote'] ?> cm" class="form-control" placeholder="cm" readonly required />
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label>Valor</label>
                                    <input name="valorPacote" type="text" value="<?php echo $linha['valorPacote'] ?>" class="form-control" placeholder="R$" onKeyPress="return(moeda(this,'.',',',event))" readonly required />
                                </div>
                                <div class="mb-3 col-md-7">
                                    <label>Data de expiração</label>
                                    <input name="dataExpiracaoPacote" value="<?php echo $linha['dataExpiracaoPacote'] ?>" maxlength="10" type="date" class="form-control" placeholder="DD/MM/AAAA" OnKeyPress="formatar('##/##/####', this)" readonly required />
                                </div>
                                <div class="mb-3 col-md-12 row-md-12 ">
                                    <label>Descrição</label>
                                    <input name="obsPacote" value="<?php echo $linha['obsPacote'] ?>" type="text" id="bairro" maxlength="100" class="form-control" placeholder="Descreva o produto (leve/pesado e pequeno/grande) e o tipo de transporte necessário (moto/carro/caminhão)" readonly required />
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" name="idUsuario" value="<?php echo $row['id'] ?>">
                                    <input type="hidden" name="idFrete" value="<?php echo $linha['id'] ?>">
                                    <input class="btn btn-primary float-end" type="submit" value="Iniciar serviço">
                                    <a class="btn btn-success float-end me-1" href="./fretes_disponiveis-logged.php">Voltar</a>
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