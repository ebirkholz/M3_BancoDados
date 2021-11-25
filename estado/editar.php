<!DOCTYPE html>
<?php 
    include('../config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT nome, uf FROM estado WHERE id = $id;";
        if ($result = $mysqli->query($sql)) {
            $row = $result->fetch_row();
            $nome = $row[0];
            $uf = $row[1];
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h2>Editar Estado</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" value="<?php echo $nome; ?>" maxlength="60"/>
            <br/><br/>
            <label for="uf">UF*</label>
            <input type="text" name="uf" id="uf" required="true" value="<?php echo $uf; ?>" maxlength="2"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index_location.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
