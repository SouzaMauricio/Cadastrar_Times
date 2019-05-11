<?php
    require_once "../beans/BeansPlayer.php";
    require_once "Conexao.php";
    Class ModelPlayer{

        function Registration($player)
        {
            try
            {
                $conexao = new Conexao();
                $sql = "INSERT INTO PLAYER(PLAYER_NAME, LAST_NAME, ID_TEAM, SHIRT_NUMBER) VALUES
                ('" . $player->get_name() . "', '" . $player->get_lastName() . "',  " . $player->get_team() . ", " . $player->get_shirtNumber() . ")";
                
                mysqli_query($conexao->conectar(), $sql);

                mysqli_close($conexao->conectar());

                echo 0;
            }
            catch(Exception $ex)
            {
                throw new Exception($ex->getMessage());
            }
            finally
            {
                mysqli_close($conexao->conectar());
            }
        }

        function SelectAll()
        {
            try
            {
                $conexao = new Conexao();
                $sql = "SELECT ID, PLAYER_NAME, LAST_NAME, SHIRT_NUMBER, CREATED_AT, UPDATED_AT, (SELECT TEAM_NAME FROM TEAM WHERE ID = ID_TEAM) AS TEAM FROM PLAYER";
                
                $result = mysqli_query($conexao->conectar(), $sql);
        
                if(mysqli_num_rows($result) > 0)
                {
                    return $result;
                }
                else
                {
                    return "0";
                }
            }
            catch(Exception $ex)
            {
                throw new Exception($ex->getMessage());
            }
            finally
            {
                mysqli_close($conexao->conectar());
            }
        }

        function SelectPlayer($id)
        {
            try
            {
                $conexao = new Conexao();
                $player = new BeansPlayer;
                $sql = "SELECT * FROM PLAYER WHERE ID = $id";
                
                $result = mysqli_query($conexao->conectar(), $sql);
        
                if(mysqli_num_rows($result) > 0)
                {
                    While($row = $result->fetch_array()){
                        $player->set_name($row['PLAYER_NAME']);
                        $player->set_lastName($row['LAST_NAME']);
                        $player->set_team($row['ID_TEAM']);
                        $player->set_shirtNumber($row['SHIRT_NUMBER']);
                    }
                    return $player;
                }
                else
                {
                    $r[0] = 0;
                    return $r;
                }
            }
            catch(Exception $ex)
            {
                throw new Exception($ex->getMessage());
            }
            finally
            {
                mysqli_close($conexao->conectar());
            }
        }

        function Delete($id)
        {
            try
            {
                $conexao = new Conexao();
                $sql = "DELETE FROM PLAYER WHERE ID = $id";
                mysqli_query($conexao->conectar(), $sql);
                echo 0;
            }
            catch(Exception $ex)
            {
                throw new Exception($ex->getMessage());
            }
            finally
            {
                mysqli_close($conexao->conectar());
            }
        }

        function Update($player)
        {
            try
            {
                $conexao = new Conexao();
                $sql = "UPDATE PLAYER SET PLAYER_NAME = '" . $player->Get_name() . "', LAST_NAME = '" . $player->Get_lastName() . "', 
                ID_TEAM = " . $player->Get_team() . ", SHIRT_NUMBER = " . $player->Get_shirtNumber() . " WHERE ID = " . $player->Get_id();
                
                mysqli_query($conexao->conectar(), $sql);

                mysqli_close($conexao->conectar());

                echo 0;
            }
            catch(Exception $ex)
            {
                throw new Exception($ex->getMessage());
            }
            finally
            {
                mysqli_close($conexao->conectar());
            }
        }
    }
?>
