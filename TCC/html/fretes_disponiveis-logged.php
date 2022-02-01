<?php

include("./logged.php");
include("./exibe_id.php");
include("./exibe_fretes.php");

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
    <title>FRETES DISPONÍVEIS | TCC - Bernardo e Gustavo</title>

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
    <div class="mt-5 box-search d-flex justify-content-center gap-1">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
        <button onclick="porMim()" class="btn btn-success">Cadastrados por mim</button>
        <button onclick="porData()" class="btn btn-warning text-light">Que vencem primeiro</button>
    </div>

    <div class="m-5 border p-4 bg-dark shadow">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Peso do produto</th>
                    <th scope="col">Cidade de origem</th>
                    <th scope="col">Cidade de destino</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data de expiração</th>
                    <th scope="col">Autor</th>
                </tr>
            </thead>
            <tbody class="">
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['pesoPacote'] . " kg</td>";
                    echo "<td>" . $row['cidadeRemetente'] . " - " . $row['ufRemetente'] . "</td>";
                    echo "<td>" . $row['cidadeDestinatario'] . " - " . $row['ufDestinatario'] . "</td>";
                    echo "<td>" . $row['valorPacote'] . "</td>";
                    echo "<td>" . explode('-', $row['dataExpiracaoPacote'])[2] . "/" . explode('-', $row['dataExpiracaoPacote'])[1] . "/" . explode('-', $row['dataExpiracaoPacote'])[0] . "</td>";
                    echo "<td>" . explode(' ', $row['nomeCompletoRemetente'])[0] . "</td>";
                    echo "<td>
                    <a class='btn btn-sm btn-outline-primary' href='./frete_page-logged.php?id=$row[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'>
                    <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
                    <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
                    </svg>
                    </a>
                    </td>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <!--SLIDER-->

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

<script>
    var search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'fretes_disponiveis-logged.php?search=' + search.value;
    }

    function porMim() {
        window.location = 'fretes_disponiveis-logged.php?idUser=' + <?php echo $id ?>;
    }

    function porData() {
        window.location = 'fretes_disponiveis-logged.php?order=data';
    }
</script>

</html>