<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Condominio não encontrado para exclusão";
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM condominio WHERE id = $id;";
        if ($mysqli->query($sql) == true) {
            echo "Condominio excluído";
        } else {
            echo "Erro ao excluir o Condominio, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_condominio.php'">Voltar</button>
