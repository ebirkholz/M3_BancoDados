<!DOCTYPE html>
<?php 
    include('../config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT nome, cnpj, endereco_id FROM condominio WHERE id = $id;";
        if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_row();
            $nome = $row[0];
            $cnpj = $row[1];
            $endereco_id = $row[2];
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h2>Editar Condominio</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" value="<?php echo $nome; ?>" maxlength="50"/>
            <br/><br/>
            <label for="cnpj">CNPJ*</label>
            <input type="text" name="cnpj" id="cnpj" required="true" value="<?php echo $cnpj; ?>" maxlength="14"/>
            <br/><br/>
            <label for="endereco_id">ID do Endereço* (Vide tabela abaixo)</label>
            <input type="text" name="endereco_id" id="endereco_id" required="true" value="<?php echo $endereco_id; ?>" maxlength="2"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
        <br/><br/>
        <br/><br/>
        <small>Caso o seu endereço não esteja listado abaixo, você pode adicionar um novo clicando abaixo:</small>
        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Logradouro</th>
                <th>Numero</th>
                <th>Bairro</th>
                <th>CEP</th>
                <th>Complemento</th>
            </tr>
            <?php
                $sql = "SELECT id, cidade_id, logradouro, numero, bairro, cep, complemento FROM endereco ORDER BY id;";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['logradouro'] . "</td>";
                        echo "<td>" . $row['numero'] . "</td>";
                        echo "<td>" . $row['bairro'] . "</td>";
                        echo "<td>" . $row['cep'] . "</td>";
                        echo "<td>" . $row['complemento'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='../endereco/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='../endereco/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <button type="button" onclick="location.href='../endereco/adicionar.php'">Adicionar</button>
    </body>
</html>
