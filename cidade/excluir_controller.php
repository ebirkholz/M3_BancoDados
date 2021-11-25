<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Cidade não encontrado para exclusão";
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM cidade WHERE id = $id;";
        if ($mysqli->query($sql) == true) {
            echo "Cidade excluída";
        } else {
            echo "Erro ao excluir a Cidade, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
