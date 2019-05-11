<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Team Registration</title>
        <!-- JQuery -->	
        <script rel="preload" src="../js/jquery-2.2.4.js" as="script"></script>
        <!--Functions JS-->
        <script rel="preload" src="../js/default.js" as="script"></script>
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="../css/default.css">
       
        <?php
            require_once "../controller/Select.php";
            $select = new Select;
            $teams = $select->SelectAllTeams();
        ?>
    </head>
    <body>
        <center>
            <a href="../" class="title">Home<a>
            <div>
                <form method="POST" id="frmTeam">
                    <h2>Cadastro de Times</h2>
                    <input type="Text" id="name" name="name" placeholder="Nome do Time" required>
                    <br><br> 
                    <input type="Text" id="shelColor" name="shelColor" placeholder="Cor do Escudo" required>
                    <br><br>
                    <input type="date" id="dateFundation" name="dateFundation">
                    <br><br>
                    <input type="submit" id="submit" value="Cadastrar">&nbsp&nbsp
                    <button onclick="Cancelar()">Cancelar</button>
                </form>
            <div>
            <h2>Times cadastrados</h2>
            <div>
                <table>
                    <?php
                        echo $teams;
                    ?>
                </table>
                <br>
            <div>
        </center>
    <body>
</html>