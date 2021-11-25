<?php
    include('../config.php');

    if($_POST['logradouro'] == "") {
        echo "Por favor, informe o Logradouro do endereço";
    } else if ($_POST['cidade_id'] == "") {
        echo "Por favor, informe o ID da Cidade correspondente";
    } else if ($_POST['numero'] == "") {
        echo "Por favor, informe o Numero do seu endereço";
    } else if ($_POST['bairro'] == "") {
        echo "Por favor, informe o Bairro do seu endereço";
    } else if ($_POST['cep'] == "") {
        echo "Por favor, informe o CEP do seu endereço";
    } else if ($_POST['complemento'] == "") {
        echo "Por favor, informe alguma referência do seu endereço";
    } else {
        $cidade_id = $_POST['cidade_id'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $complemento = $_POST['complemento'];        
        
        $sql = "INSERT INTO endereco (cidade_id, logradouro, numero, bairro, cep, complemento) 
                VALUES ('$cidade_id', '$logradouro', '$numero', '$bairro', '$cep', '$complemento');";

        if ($mysqli->query($sql) == true) {
            echo "Endereço adicionado";
        } else {
            echo "Erro ao adicionar a Endereço, muito provável que o ID da Cidade informado não exista.";
            echo "Verifique novamente de acordo com a tabela ou tente novamente mais tarde.";
        }
        $mysqli->close();
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
