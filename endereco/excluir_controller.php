<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Endereço não encontrado para exclusão";
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM endereco WHERE id = $id;";
        if ($mysqli->query($sql) == true) {
            echo "Endereço excluído";
        } else {
            echo "Erro ao excluir o Endereço, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
