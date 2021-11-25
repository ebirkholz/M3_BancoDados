<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sol Nascente</title>
    </head>
    <body>
        <h2>Adicionar Estado</h2>
        <small>*campos obrigatórios</small>
        <br/><br/>
        <form action="adicionar_controller.php" method="post">
            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" required="true" maxlength="100"/>
            <br/><br/>
            <label for="uf">UF*</label>
            <input type="text" name="uf" id="uf" required="true" maxlength="2"/>
            <br/><br/>
            <button type="button" onclick="location.href='../index_location.php'">Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>
