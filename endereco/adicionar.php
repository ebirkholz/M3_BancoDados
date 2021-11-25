<!DOCTYPE html>
<?php include('../config.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h2>Adicionar Endereço</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="adicionar_controller.php" method="post">
            <label for="logradouro">Logradouro*</label>
            <input type="text" name="logradouro" id="logradouro" required="true" maxlength="100"/>
            <br/><br/>
            <label for="numero">Numero*</label>
            <input type="number" name="numero" id="numero" required="true" maxlength="10"/>
            <br/><br/>
            <label for="bairro">Bairro*</label>
            <input type="text" name="bairro" id="bairro" required="true" maxlength="50"/>
            <br/><br/>
            <label for="cep">CEP* (sem pontos ou traço, apenas numeros)</label>
            <input type="text" name="cep" id="cep" required="true" maxlength="8"/>
            <br/><br/>
            <label for="cidade_id">ID da Cidade* (Vide tabela abaixo)</label>
            <input type="number" name="cidade_id" id="cidade_id" required="true" maxlength="2"/>
            <br/><br/>
            <label for="complemento">Complemento* (informar apartamento, referência se houver)</label>
            <input type="text" name="complemento" id="complemento" required="true" maxlength="50"/>
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
