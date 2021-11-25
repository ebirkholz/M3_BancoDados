<?php
    include('../config.php');

    if($_POST['nome'] == "") {
        echo "Por favor, informe o Nome do Condominio";
    } else if ($_POST['endereco_id'] == "") {
        echo "Por favor, informe o ID do Endereço correspondente ao condominio";
    } else if ($_POST['cnpj'] == "") {
        echo "Por favor, informe o CNPJ do condominio";
    } else {
        $endereco_id = $_POST['endereco_id'];
        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];      
        
        $sql = "INSERT INTO condominio (endereco_id, nome, cnpj) 
                VALUES ('$endereco_id', '$nome', '$cnpj');";

        if ($mysqli->query($sql) == true) {
            echo "Condominio adicionado";
            echo "<br/><br/>";
            echo "<button type=\"button\" onclick=\"location.href='../index_condominio.php'\">Voltar</button>";
        } else {
            echo "Erro ao adicionar o Condominio, muito provável que o ID do Endereço informado não exista.";
            echo "Verifique novamente de acordo com a tabela ou tente novamente mais tarde.";
            echo "<br/><br/>";
            echo "<button type=\"button\" onclick=\"location.href='adicionar.php'\">Voltar</button>";
        }
        $mysqli->close();
    }
?>

