<!DOCTYPE html>
<?php include('config.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h1 align=center>Sol Nascente</h1>
        <br/><h1>Editor de Localizações</h1><br/>
        <button onclick="location.href='index.php'">Voltar</button>
        <hr/>
        <h2>Gerenciar Estados</h2>
        <button onclick="location.href='estado/adicionar.php'">Adiconar</button>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>UF</th>
                <th>Opções</th>
            </tr>
            <?php
                $sql = "SELECT id, nome, uf FROM estado ORDER BY nome;";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['uf'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='estado/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='estado/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br/>
        <hr/>
        <h2>Gerenciar Cidades</h2>
        <button onclick="location.href='cidade/adicionar.php'">Adiconar</button>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
            <?php
                $sql = "SELECT id, estado_id, nome FROM cidade ORDER BY nome;";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='cidade/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='cidade/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br/>
        <hr/>
        <h2>Gerenciar Endereços</h2>
        <button onclick="location.href='endereco/adicionar.php'">Adiconar</button>
        <br/><br/>
        <table border="1px">
            <tr>
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
                        echo "<td>" . $row['logradouro'] . "</td>";
                        echo "<td>" . $row['numero'] . "</td>";
                        echo "<td>" . $row['bairro'] . "</td>";
                        echo "<td>" . $row['cep'] . "</td>";
                        echo "<td>" . $row['complemento'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='endereco/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='endereco/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br/>
        <hr/>
        <button onclick="location.href='index.php'">Voltar</button>
        <br/>
        <hr/>
    </body>
</html>
