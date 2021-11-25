<?php
    include('../config.php');

    if($_POST['nome'] == "") {
        echo "Por favor, informe o nome da Cidade";
    } else if ($_POST['estado_id'] == "") {
        echo "Por favor, informe o ID do Estado correspondente";
    } else {
        $nome = $_POST['nome'];
        $estado_id = $_POST['estado_id'];
        
        $sql = "INSERT INTO cidade (estado_id, nome) VALUES ('$estado_id', '$nome');";

        if ($mysqli->query($sql) == true) {
            echo "Cidade adicionada";
        } else {
            echo "Erro ao adicionar a Cidade, muito provável que o ID do estado informado não exista.";
            echo "Verifique novamente de acordo com a tabela ou tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
