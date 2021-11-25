<!DOCTYPE html>
<?php include('../config.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h2>Adicionar Cidade</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="adicionar_controller.php" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" maxlength="100"/>
            <br/><br/>
            <label for="estado_id">ID da UF (vide tabela abaixo)*</label>
            <input type="number" name="estado_id" id="estado_id" required="true" maxlength="2"/>
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
                $sql = "SELECT id, nome, uf FROM estado ORDER BY nome;";
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
