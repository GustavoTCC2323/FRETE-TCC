<?php
include "./logged.php";
include "./exibe_id.php";
include "./calcula_idade.php";
include "./my_frete_view.php";
include "./fretes_criados_por_mim.php";
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../images/favicon-32x32.png" type="image/x-icon" />

    <script src="../js/scroll.js"></script>
    <script src="../js/formatar.js"></script>
    <script src="../js/consulta_cep.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <title>Página de <?php echo $logado ?> | TCC - Bernardo e Gustavo</title>
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

    <div class="container rounded bg-white mt-5 mb-5 shadow">
        <div class="row">
            <div class="col-md-2 border-right bg-dark bg-gradient text-light rounded shadow">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><span class="fw-bolder fs-3"><?php echo $logado ?></span><span class="fw-bolder fs-3"> <?php echo $idade ?> anos </span><span class="fw-light fs-6"> <?php echo $row['cidade']?> - <?php echo $row['uf'] ?></span></div>
            </div>
            <div class="col-md-10 border-right shadow">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Meus dados</h4>
                    </div>
                    <form action="./edita_perfil.php" method="POST">
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Nome</label><input type="text" name="nome" id="nome" class="form-control" placeholder="first name" value="<?php echo $row['nome'] ?>" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">E-mail</label><input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" value="<?php echo $row['email'] ?>" required></div>
                            <div class="col-md-6"><label class="labels">Senha</label><input type="text" name="senha" id="senha" class="form-control" placeholder="Digite uma senha" value="<?php echo $row['senha'] ?>" required></div>
                            <div class="col-md-4"><label class="labels">CEP</label><input type="text" name="cep" id="cep" class="form-control" id="cep" placeholder="CEP" OnKeyPress="formatar('##.###-###', this)" value="<?php echo $row['cep'] ?>" required></div>
                            <div class="col-md-8"><label class="labels">Rua</label><input type="text" name="rua" id="rua" class="form-control" placeholder="Rua" value="<?php echo $row['rua'] ?>" required></div>
                            <div class="col-md-3"><label class="labels">Número</label><input type="text" name="numero" id="numero" class="form-control" placeholder="Nº" value="<?php echo $row['numero'] ?>" required></div>
                            <div class="col-md-4"><label class="labels">Bairro</label><input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" value="<?php echo $row['bairro'] ?>" required></div>
                            <div class="col-md-5"><label class="labels">Cidade</label><input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" value="<?php echo $row['cidade'] ?>" required></div>
                            <div class="col-md-3"><label class="labels">Estado</label><input type="text" name="uf" id="uf" class="form-control" placeholder="UF" value="<?php echo $row['uf'] ?>" required></div>
                            <div class="col-md-9"><label class="labels">CPF</label><input type="text" name="cpf" id="cpf" maxlength="14" class="form-control" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" value="<?php echo $row['cpf'] ?>" required></div>
                            <div class="col-md-12"><label class="labels">Data de nascimento</label><input type="date" name="data_nascimento" id="data_nascimento" maxlength="10" class="form-control" placeholder="Data de nascimento" OnKeyPress="formatar('##/##/####', this)" value="<?php echo $row['data_nascimento'] ?>" required></div>
                        </div>
                        <div class="mt-5 text-center"><input class="btn btn-primary profile-button" value="Salvar" name="update" id="update" type="submit"></div>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="col-md-12 mt-5 me- p-1 bg-dark shadow rounded-3">
                    <div class="text-light d-flex justify-content-center align-items-center experience text-secondary fw-bold mt-2"><span>Meus serviços</span></div><br>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Cidade de destino</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Data de expiração</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php
                            while ($rowMy = $resultado->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $rowMy['id'] . "</td>";;
                                echo "<td>" . $rowMy['cidadeDestinatario'] . " - " . $rowMy['ufDestinatario'] . "</td>";
                                echo "<td>" . $rowMy['valorPacote'] . "</td>";
                                echo "<td>" . explode('-', $rowMy['dataExpiracaoPacote'])[2] . "/" . explode('-', $rowMy['dataExpiracaoPacote'])[1] . "/" . explode('-', $rowMy['dataExpiracaoPacote'])[0] . "</td>";
                                echo "<td>
                                        <a class='btn btn-sm btn-outline-primary' href='./my_frete_page-logged.php?id=$rowMy[id]'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'>
                                                <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
                                                <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
                                            </svg>
                                        </a>
                                    </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12 mt-5 p-1 bg-dark shadow mb-5 rounded-3 gap-1">
                    <div class="text-light d-flex justify-content-center align-items-center experience text-secondary fw-bold mt-2"><span>Fretes criados por mim</span></div><br>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Cidade de destino</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Data de expiração</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php
                            while ($rowByMe = $resultadoByMe->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $rowByMe['id'] . "</td>";;
                                echo "<td>" . $rowByMe['cidadeDestinatario'] . " - " . $rowByMe['ufDestinatario'] . "</td>";
                                echo "<td>" . $rowByMe['valorPacote'] . "</td>";
                                echo "<td>" . explode('-', $rowByMe['dataExpiracaoPacote'])[2] . "/" . explode('-', $rowByMe['dataExpiracaoPacote'])[1] . "/" . explode('-', $rowByMe['dataExpiracaoPacote'])[0] . "</td>";
                                echo "<td class=''>
                                        <a class='btn btn-sm btn-outline-success' href='./my-edit_frete_page-logged.php?id=$rowByMe[id]'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                                <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                                            </svg>
                                        </a>
                                        <a class='btn btn-sm btn-outline-danger' href='./deleta_frete.php?id=$rowByMe[id]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                    </svg>
                                    </a>
                                    </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!--SLIDER-->

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>