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
  <title>REGISTRO | TCC - Bernardo e Gustavo</title>

  <script src="../js/consulta_cep.js"></script>
  <script src="../js/formatar.js"></script>

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
          <form action="./processar_cadastro.php" method="POST" class="mt-5 border p-4 bg-light shadow">
            <h4 class=" mb-5 text-secondary">Registre-se</h4>
            <div class="row">
              <div class="mb-3 col-md-12">
                <label>Nome completo<span class="text-danger">*</span></label>
                <input type="text" name="nomeCompletoRegister" class="form-control" placeholder="Digite seu nome completo" required>
              </div>
              <div class="mb-3 col-md-6">
                <label>E-mail<span class="text-danger">*</span></label>
                <input type="email" name="emailRegister" id="emailRegister" class="form-control" placeholder="Digite seu e-mail" required>
              </div>
              <div class="mb-3 col-md-6">
                <label>Confirme seu e-mail<span class="text-danger">*</span></label>
                <input type="email" name="confirmemailRegister" id="confirmemailRegister" class="form-control" placeholder="Confirme seu e-mail" required>
              </div>
              <div class="mb-3 col-md-12">
                <label>Senha<span class="text-danger">*</span></label>
                <input type="password" name="passwordRegister" id="passwordRegister" class="form-control" placeholder="Crie uma senha" required>
              </div>
              <div class="mb-3 col-md-12">
                <label>Confirme sua senha<span class="text-danger">*</span></label>
                <input type="password" name="confirmpasswordRegister" id="confirmpasswordRegister" class="form-control" placeholder="Confirme sua senha" required>
              </div>
              <div class="mb-3 col-md-4">
                <label>CEP<span class="text-danger">*</span></label>
                <input name="cep" type="text" id="cep" value="" size="10" maxlength="10" class="form-control" placeholder="CEP" OnKeyPress="formatar('##.###-###', this)" onblur="pesquisacep(this.value);" required />
              </div>
              <div class="mb-3 col-md-6">
                <label>Logradouro<span class="text-danger">*</span></label>
                <input name="rua" type="text" id="rua" value="" class="form-control" placeholder="Rua" required />
              </div>
              <div class="mb-3 col-md-2">
                <label>Número<span class="text-danger">*</span></label>
                <input name="numero" type="text" id="numero" value="" class="form-control" placeholder="Nº" required />
              </div>
              <div class="mb-3 col-md-4">
                <label>Bairro<span class="text-danger">*</span></label>
                <input name="bairro" type="text" id="bairro" value="" class="form-control" placeholder="Bairro" required />
              </div>
              <div class="mb-3 col-md-5">
                <label>Cidade<span class="text-danger">*</span></label>
                <input name="cidade" type="text" id="cidade" value="" class="form-control" placeholder="Cidade" required />
              </div>
              <div class="mb-3 col-md-3">
                <label>Estado<span class="text-danger">*</span></label>
                <input name="uf" type="text" id="uf" value="" class="form-control" placeholder="UF" required />
              </div>
              <div class="mb-3 col-md-6">
                <label>CPF<span class="text-danger">*</span></label>
                <input name="cpf" type="text" id="cpf" value="" class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF" required />
              </div>
              <div class="mb-3 col-md-6">
                <label>Data de nascimento<span class="text-danger">*</span></label>
                <input name="data_nascimento" type="date" id="data_nascimento" value="" maxlength="10" class="form-control" OnKeyPress="formatar('##/##/####', this)" placeholder="DD/MM/AAAA" required />
              </div>
              <div class="col-md-12">
                <input class="btn btn-primary float-end" type="submit" value="Registrar">
              </div>
            </div>
          </form>
          <p class=" text-center mt-3 text-secondary">Se você já tem uma conta, <a href="../html/login-page.php">faça o login</a></p>
        </div>
      </div>
    </div>
  </div>


  <!--SLIDER-->

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>