<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Jogadores</title>
        <!-- JQuery -->	
        <script rel="preload" src="../js/jquery-2.2.4.js" as="script"></script>
        <!--Functions JS-->
        <script rel="preload" src="../js/default.js" as="script"></script>
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="../css/default.css">

        <?php
            require_once "../controller/Select.php";
            $select = new Select;
            $teams = $select->SelectAllTeamsOptions();
            $players = $select->SelectAllPlayers();
        ?>
    </head>
    <body>
        <center>
            <a href="../" class="title">Home |<a>
            <a href="team.php" class="title">Cadastro de Times</a>
            <br>
            <form method="POST" id="frmPlayer">
                <h2>Cadastro de Jogadores</h2>
                <input type="Text" name="name" id="name" placeholder="Nome do Jogador" required>
                <br><br> 
                <input type="Text" name="lastName" id="lastName" placeholder="Sobrenome do Jogador" required>
                <br><br>
                <input type="Text" name="shirtNumber" id="shirtNumber" placeholder="Número da Camisa" required>
                <br><br>
                <select name="team" id="team">
                    <?php
                        echo $teams;
                    ?>
                <select>
                <br><br>
                <input type="submit" id="submit" value="Cadastrar">&nbsp&nbsp
                <button onclick="Cancelar()">Cancelar</button>
            </form>

            <h2>Jogadores Cadastrados</h2>
            <div>
                <table class="table_player">
                    <?php
                        echo $players;
                    ?>
                </table>
                <br>
        </center>
    <body>
</html> 
