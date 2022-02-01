
    <?php
    
    include_once('config.php');
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conexao->query($sql);
    $row = $result->fetch_assoc();

    ?>