<?php
    Class Select{
        function SelectAllTeams(){
            require_once "../model/ModelTeam.php";
            $team = new ModelTeam;
            $teams = $team->SelectAll();
            if($teams != "0"){
                $data = '
                    <tr>
                        <th>Nome</th>
                        <th>Cor do Escudo</th> 
                        <th>Data de Fundação</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                        <th></th>
                    </tr>';
                while($row = mysqli_fetch_array($teams)){
                    $data .= '
                        <tr>
                            <td>'. utf8_decode($row["TEAM_NAME"]) . '</td>
                            <td>'. utf8_decode($row["SHELL_COLOR"]) . '</td>
                            <td>'. date("d/m/Y", strtotime($row["DATE_FOUNDATION"])) . '</td>
                            <td>'. date("d/m/Y", strtotime($row["CREATED_AT"])) . '</td>
                            <td>'. date("d/m/Y", strtotime($row["UPDATED_AT"])) . '</td>
                            <td>
                                <a href="#" class="lista" onclick="">
                                    <img src="../img/edit.png" title="Editar" onclick="UpdateTeam(' . $row["ID"] . ')">
                                </a>
                                <a href="#" class="lista excluir">
                                    <img src="../img/delete.png" title="Excluir" onclick="DeleteTeam(' . $row["ID"] . ')">
                                </a>
                            </td>
                        </tr>';
                }
            }
            else{
                $data = '<p>Nenhum time cadastrado.<p>';
            }
            return $data;
        }
        function SelectAllPlayers(){
            require_once "../model/ModelPlayer.php";
            $player = new ModelPlayer;
            $players = $player->SelectAll();
            if($players != "0"){
                $data = '                                    
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th> 
                        <th>Camisa</th>
                        <th>Time</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                        <th></th>
                    </tr>';
                while($row = mysqli_fetch_array($players)){
                    $data .= '
                        <tr>
                            <td>'. utf8_decode($row["PLAYER_NAME"]) . '</td>
                            <td>'. utf8_decode($row["LAST_NAME"]) . '</td>
                            <td>'. $row["SHIRT_NUMBER"] . '</td>
                            <td>'. $row["TEAM"] . '</td>
                            <td>'. date("d/m/Y", strtotime($row["CREATED_AT"])) . '</td>
                            <td>'. date("d/m/Y", strtotime($row["UPDATED_AT"])) . '</td>
                            <td>
                                <a href="#" class="lista" onclick="">
                                    <img src="../img/edit.png" title="Editar" onclick="UpdatePlayer(' . $row["ID"] . ')">
                                </a>
                                <a href="#" class="lista excluir">
                                    <img src="../img/delete.png" title="Excluir" onclick="DeletePlayer(' . $row["ID"] . ')">
                                </a>
                            </td>
                        </tr>
                        ';
                }
            }
            else{
                $data = '<p>Nenhum jogador cadastrado.<p>';
            }
            return  $data;
        }

        function SelectAllTeamsOptions(){
            require_once "../model/ModelTeam.php";
            $team = new ModelTeam;
            return $teams = $team->SelectAll();
        }            
    }
?>