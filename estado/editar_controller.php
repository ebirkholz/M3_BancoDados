<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Estado não encontrado para edição";
    } else {
        $id = $_GET['id'];
        if($_POST['nome'] == "") {
            echo "Por favor, informe o nome do Estado";
        } else if ($_POST['uf'] == "") {
            echo "Por favor, informe o UF do Estado. Vale lembrar que são apenas 2 digitos. Ex: São Paulo = SP.";
        } else {
            $nome = $_POST['nome'];
            $uf = $_POST['uf'];
            
            $sql = "UPDATE estado SET nome = '$nome', uf = '$uf' WHERE id = $id;";
           
            if ($mysqli->query($sql) == true) {
                echo "Estado editado";
            } else {
                echo "Erro ao editar o Estado, tente novamente mais tarde.";
            }
            $mysqli->close();
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
