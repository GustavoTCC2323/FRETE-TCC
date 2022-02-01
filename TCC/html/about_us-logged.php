<?php

include("./logged.php");

?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../images/favicon-32x32.png" type="image/x-icon" />

    <script src="../js/scroll.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <title>SOBRE NÓS | TCC - Bernardo e Gustavo</title>

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
                                    <li><a class="dropdown-item" href="#">Histórico de Fretes</a></li>
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

    <div class="bg-light">
        <div class="container py-5">
            <div class="row h-100 align-items-center py-5">
                <div class="col-lg-6">
                    <h1 class="display-4">Conheça o projeto</h1>
                    <p class="lead text-muted mb-0">Saiba mais sobre o projeto que vai revolucionar a forma com que
                        produtos são transportados em todo o Brasil.</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>

    <div class="bg-white py-5" id="sobreFrete">
        <div class="container py-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Sobre iniciar um frete</h2>
                    <p class="font-italic text-muted mb-4">Entre na página de fretes disponíveis, analise as opções, onde estão listados por data de inclusão. Filtre por data de vencimento ou pesquisa por elementos contidos em cada linha de informação. Clique no "olho" para ver mais e inicie o frete, ficando disponível para consulta na página do usuário.</p><a href="./fretes_disponiveis-logged.php" class="btn btn-primary px-5 rounded-pill shadow-sm">Fretes disponíveis</a>
                </div>
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
            </div>
            <div class="row align-items-center" id="sobreCadastro">
                <div class="col-lg-5 px-5 mx-auto"><img src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Sobre cadastrar um frete</h2>
                    <p class="font-italic text-muted mb-4">Para cadastrar um frete, esteja logado em sua conta e verifique que todas as suas informações pessoas estejam corretas. Caso tenha que mudar alguma informação, verifique e edite as informações no perfil do usuário. Verificadas todas as informações, acesse a página de cadastro de frete, coloque o endereço do remetente (quem envia) e coloque as informações do destinatário (quem recebe). Logo após, descreva os detalhes do produto e adicione às observações um texto como: "Produto pequeno e leve que necessita de no míninmo uma moto".</p><a href="./cadastro-fretes-logged.php" class="btn btn-primary px-5 rounded-pill shadow-sm">Cadastrar um frete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5">
                    <h2 class="display-4 font-weight-light">Nossa equipe</h2>
                    <p class="font-italic text-muted">Saiba quem são os idealizadores desse projeto.</p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-6 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="../images/bernardo.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Bernardo Augusto</h5><span class="small text-uppercase text-muted">Estudante de T.I.</span>
                    </div>
                </div>
                <!-- End-->



                <!-- Team item-->
                <div class="col-xl-6 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="../images/gustavo.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Gustavo Henrique</h5><span class="small text-uppercase text-muted">Estudante de T.I.</span>
                    </div>
                </div>
                <!-- End-->

            </div>
        </div>
    </div>


    <!--SLIDER-->

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>