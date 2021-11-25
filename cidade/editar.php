<!DOCTYPE html>
<?php 
    include('../config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT estado_id, nome FROM cidade WHERE id = $id;";
        if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_row();
            $estado_id = $row[0];
            $nome = $row[1];
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h2>Editar Cidade</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" value="<?php echo $nome; ?>" maxlength="60"/>
            <br/><br/>
            <label for="estado_id">UF ID (vide tabela abaixo)*</label>
            <input type="number" name="estado_id" id="estado_id" required="true" value="<?php echo $estado_id; ?>" maxlength="2"/>
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
