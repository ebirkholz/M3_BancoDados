<!DOCTYPE html>
<?php 
    include('../config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT logradouro, numero, bairro, cep, complemento, cidade_id FROM endereco WHERE id = $id;";
        if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_row();
            $logradouro = $row[0];
            $numero = $row[1];
            $bairro = $row[2];
            $cep = $row[3];
            $complemento = $row[4];
            $cidade_id = $row[5];
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h2>Editar Endereço</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
            <label for="logradouro">Logradouro*</label>
            <input type="text" name="logradouro" id="logradouro" required="true" value="<?php echo $logradouro; ?>" maxlength="100"/>
            <br/><br/>
            <label for="numero">Numero*</label>
            <input type="number" name="numero" id="numero" required="true" value="<?php echo $numero; ?>" maxlength="10"/>
            <br/><br/>
            <label for="bairro">Bairro*</label>
            <input type="text" name="bairro" id="bairro" required="true" value="<?php echo $bairro; ?>" maxlength="50"/>
            <br/><br/>
            <label for="cep">CEP* (sem pontos ou traço, apenas numeros)</label>
            <input type="text" name="cep" id="cep" required="true" value="<?php echo $cep; ?>" maxlength="8"/>
            <br/><br/>
            <label for="cidade_id">ID da Cidade* (Vide tabela abaixo)</label>
            <input type="number" name="cidade_id" id="cidade_id" required="true" value="<?php echo $cidade_id; ?>" maxlength="2"/>
            <br/><br/>
            <label for="complemento">Complemento* (informar apartamento, referência se houver)</label>
            <input type="text" name="complemento" id="complemento" required="true" value="<?php echo $complemento; ?>" maxlength="50"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index_location.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>ID</th>
            </tr>
            <?php
                $sql = "SELECT id, nome FROM cidade ORDER BY nome;";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>
