<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Estado não encontrado para exclusão";
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM estado WHERE id = $id;";
        if ($mysqli->query($sql) == true) {
            echo "Estado excluído";
        } else {
            echo "Erro ao excluir o Estado, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
