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
  <title>LOGIN | TCC - Bernardo e Gustavo</title>

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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mob-navbar">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">PÁGINA INICIAL</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">FRETES</a>
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
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="signup-form">
          <form action="./test-login.php" method="POST" class="mt-5 border p-4 bg-light shadow">
            <h4 class=" mb-3 text-secondary text-center">Entrar</h4>
            <div class="row">
              <div class="mb-3 col-md-12">
                <label>E-mail<span class="text-danger">*</span></label>
                <input type="email" name="emailLogin" class="form-control" placeholder="E-mail" required>
              </div>
              <div class="mb-3 col-md-12">
                <label>Senha<span class="text-danger">*</span></label>
                <input type="password" name="passwordLogin" class="form-control" placeholder="Crie uma senha" required>
              </div>
              <div class=" mb-3 col-md-12">
                <input type="submit" value="Entrar" class="btn btn-primary float-end">
              </div>
            </div>
          </form>
          <p class=" text-center mt-3 text-secondary">Se você ainda não tem uma conta, <a href="../html/register_login.php">registre-se</a></p>
        </div>
      </div>
    </div>
  </div>


  <!--SLIDER-->

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>