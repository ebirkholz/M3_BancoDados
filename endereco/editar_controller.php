<?php
    include('../config.php');

    if (!isset($_GET['id'])) {
        echo "Endereço não encontrado para edição";
    } else {
        $id = $_GET['id'];
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
            $logradouro = $_POST['logradouro'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cep = $_POST['cep'];
            $complemento = $_POST['complemento']; 


            $sql = "UPDATE endereco SET logradouro = '$logradouro', numero = '$numero', bairro = '$bairro', 
                    cep = '$cep', complemento = '$complemento' WHERE id = $id;";
        

            if ($mysqli->query($sql) == true) {
                echo "Endereço editado";
            } else {
                echo "Erro ao editar o Endereço, tente novamente mais tarde.";
            }
            $mysqli->close();
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index_location.php'">Voltar</button>
