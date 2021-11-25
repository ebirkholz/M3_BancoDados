<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Condominio não encontrado para edição";
    } else {
        $id = $_GET['id'];
        if($_POST['nome'] == "") {
            echo "Por favor, informe o Nome do Condominio";
        } else if ($_POST['endereco_id'] == "") {
            echo "Por favor, informe o ID do Endereço correspondente";
        } else if ($_POST['cnpj'] == "") {
            echo "Por favor, informe o CNPJ do seu Condominio";
        } else {
            $nome = $_POST['nome'];
            $endereco_id = $_POST['endereco_id'];
            $cnpj = $_POST['cnpj'];


            $sql = "UPDATE condominio SET nome = '$nome', cnpj = '$cnpj', endereco_id = '$endereco_id' WHERE id = $id;";
        

            if ($mysqli->query($sql) == true) {
                echo "Condominio editado";
            } else {
                echo "Erro ao editar o Condominio, tente novamente mais tarde.";
            }
            $mysqli->close();
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_condominio.php'">Voltar</button>
