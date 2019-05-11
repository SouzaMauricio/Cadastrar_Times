<?php
    require_once "../beans/BeansTeam.php";
    require_once "Conexao.php";

    Class ModelTeam{

        function Registration($team)
        {
            try
            {
                $conexao = new Conexao();
                $sql = "INSERT INTO TEAM(TEAM_NAME, SHELL_COLOR, DATE_FOUNDATION) VALUES
                        ('" . $team->get_name() . "', '" . $team->get_shelColor() . "', '" . $team->get_dateFundation() . "')";
                
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
                $sql = "SELECT * FROM TEAM";                
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
        
        function SelectTeam($id)
        {
            try
            {
                $conexao = new Conexao();
                $team = new BeansTeam;
                $sql = "SELECT * FROM TEAM WHERE ID = $id";
                
                $result = mysqli_query($conexao->conectar(), $sql);
        
                if(mysqli_num_rows($result) > 0)
                {
                    While($row = $result->fetch_array()){
                        $team->set_name($row['TEAM_NAME']);
                        $team->set_shelColor($row['SHELL_COLOR']);
                        $team->set_dateFundation($row['DATE_FOUNDATION']);
                    }
                    return $team;
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
                //Validate foreign key from table Player 
                $sql = "SELECT * FROM PLAYER WHERE ID_TEAM = $id";
                $result = mysqli_query($conexao->conectar(), $sql);
                if(mysqli_num_rows($result) > 0){
                    echo "Há jogadores vinculados ao time, altere-os antes de excluir o time!";
                }
                else{
                    $sql = "DELETE FROM TEAM WHERE ID = $id";
                    mysqli_query($conexao->conectar(), $sql);
                    echo 0;
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

        function Update($team)
        {
            try
            {
                $conexao = new Conexao();
                $sql = "UPDATE TEAM SET TEAM_NAME = '" . $team->get_name() . "', SHELL_COLOR = '" . $team->get_shelColor() . "', 
                        DATE_FOUNDATION = '" . $team->get_dateFundation() . "' WHERE ID = " . $team->get_id();
                
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
    }
?>