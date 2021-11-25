<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Cidade não encontrado para edição";
    } else {
        $id = $_GET['id'];
        if($_POST['nome'] == "") {
            echo "Por favor, informe o nome da Cidade";
        } else if ($_POST['estado_id'] == "") {
            echo "Por favor, informe o ID da UF do Estado. Pegue o ID segundo a tabela.";
        } else {
            $nome = $_POST['nome'];
            $estado_id = $_POST['estado_id'];
            
            $sql = "UPDATE cidade SET nome = '$nome', estado_id = '$estado_id' WHERE id = $id;";
           
            if ($mysqli->query($sql) == true) {
                echo "Cidade editado";
            } else {
                echo "Erro ao editar a cidade, tente novamente mais tarde.";
            }
            $mysqli->close();
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
