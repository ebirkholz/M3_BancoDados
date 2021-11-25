<?php
    include('../config.php');

    if($_POST['nome'] == "") {
        echo "Por favor, informe o nome do Estado";
    } else if ($_POST['uf'] == "") {
        echo "Por favor, informe a sigla do Estado Corretamente com 2 Caracteres apenas";
    } else {
        $nome = $_POST['nome'];
        $uf = $_POST['uf'];
        
        $sql = "INSERT INTO estado (nome, uf) VALUES ('$nome', '$uf');";

        if ($mysqli->query($sql) == true) {
            echo "Estado adicionado";
        } else {
            echo "Erro ao adicionar o Estado, tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
