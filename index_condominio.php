<!DOCTYPE html>
<?php include('config.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h1 align=center>Sol Nascente</h1>
        <hr/>
        <h2>Gerenciar Condominios</h2>
        <button onclick="location.href='index.php'">Voltar</button>
        <hr/>
        <h2>Condomínios Registrados</h2>
        <button onclick="location.href='condominio/adicionar.php'">Adiconar</button>
        <br/><br/>
        <table border="1px">
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Endereço Completo</th>
            </tr>
            <?php
                $sql = "SELECT c.id AS id, c.nome AS Condominio, c.cnpj AS CNPJ, e.logradouro AS Logradouro, e.numero AS Numero, e.bairro AS Bairro,
                e.cep AS CEP, e.complemento AS Complemento
                FROM condominio c 
                INNER JOIN endereco e on c.endereco_id = e.id
                WHERE e.id = c.endereco_id;";

                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Condominio'] . "</td>";
                        echo "<td>" . $row['CNPJ'] . "</td>";
                        echo "<td>" . $row['Logradouro'] . ", " . $row['Numero'] . ", " .  $row['Bairro'] . ", " . $row['CEP'] . ", " . $row['Complemento']  . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='condominio/editar.php?id=" . $row['id'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='condominio/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
            ?>
        </table>
        <br/><br/>
        <hr/>
    </body>
</html>
