
    <?php

    include_once('config.php');

    $hoje = date('Y-m-d');

    if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM fretes WHERE id LIKE '%$data%' or pesoPacote LIKE '%$data%' or ufRemetente LIKE '%$data%' or ufDestinatario LIKE '%$data%' or cidadeRemetente LIKE '%$data%' or cidadeDestinatario LIKE '%$data%' or valorPacote LIKE '%$data%' or dataExpiracaoPacote LIKE '%$data%' or nomeCompletoRemetente LIKE '%$data%' and idContratado = 0 and dataExpiracaoPacote >= CURDATE() ORDER BY id DESC";
    } elseif (!empty($_GET['idUser'])) {
        $idUser = $_GET['idUser'];
        $sql = "SELECT * FROM fretes WHERE idUser = $idUser and idContratado = 0 and dataExpiracaoPacote >= CURDATE() ORDER BY id DESC";
    }
    elseif (!empty($_GET['order'])) {
        $sql = "SELECT * FROM fretes WHERE idContratado = 0 and dataExpiracaoPacote >= CURDATE() ORDER BY dataExpiracaoPacote ASC";
    }
    
    else {
        $sql = "SELECT * FROM fretes WHERE idContratado = 0 and dataExpiracaoPacote >= CURDATE() ORDER BY id DESC";
    }

    $result = $conexao->query($sql);
    ?>