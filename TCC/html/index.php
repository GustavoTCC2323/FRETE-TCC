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
    <title>PÁGINA INICIAL | TCC - Bernardo e Gustavo</title>
</head>

<body style="background-color: #eee;">
    <!--HEADER-->
    <div id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">
                        <img src="../images/logo.png" width="50px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar"
                        aria-label="Toggle">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mob-navbar">
                        <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./index.php">PÁGINA INICIAL</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">FRETES</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="./fretes_disponiveis.php">Fretes Disponíveis</a></li>
                                    <li><a class="dropdown-item" href="./login-page.php">Cadastrar Fretes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about_us.php">SOBRE NÓS</a>
                            </li>
                        </ul>
                        <form class="d-flex" action="./test-login.php" method="POST">
                            <input class="form-control me-2" name="emailLogin" type="email" placeholder="E-mail" />
                            <input class="form-control me-2" name="passwordLogin" type="password" placeholder="Senha" />
                            <input type="submit" value="Entrar" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--HEADER-->

    <!--SLIDER-->
    <div id="slider">
        <section class="py-5 text-center container container-geral-first">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Conheça a revolução!</h1>
                    <p class="lead text-muted">Neste novo projeto, novos empregos serão gerados e facilitados, assim
                        como um novo modo de transporte de todos os tipos de produtos, desde um celular entre os bairros
                        de uma cidade, até móveis entre todos os estados do país, de forma extremamente segura e
                        prática.</p>
                    <p>
                        <a href="./register_login.php" class="btn btn-primary my-2">Crie sua conta</a>
                        <a href="./about_us.php" class="btn btn-secondary my-2">Saiba mais sobre o projeto</a>
                    </p>
                </div>
            </div>
        </section>
        <div class="container align-self-center container-geral-second">
            <div class="row">
                <div class="col-md-5 align-self-center text-center first-container">
                    <h3>
                        QUERO ANUNCIAR UM FRETE
                    </h3>
                    <h4>
                        Anuncie já seu frete
                    </h4>
                    <a href="./login-page.php" class="btn btn-primary button">Página de cadastro de fretes</a>
                    <a href="./about_us.php#sobreCadastro" class="btn btn-outline-primary button">Entenda</a>
                </div>
                <div class="col-md-2 align-self-center text-center middle-container">
                    <h1>
                        OU
                    </h1>
                </div>
                <div class="col-md-5 align-self-center text-center second-container">
                    <h3>
                        QUERO SER CONTRATADO
                    </h3>
                    <h4>
                        Veja o que mais combina com você
                    </h4>
                    <a href="./fretes_disponiveis.php" class="btn btn-primary button">Página de fretes disponíveis</a>
                    <a href="./about_us.php#sobreFrete" class="btn btn-outline-primary button">Entenda</a>
                </div>
            </div>
        </div>
    </div>

    <!--SLIDER-->

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>