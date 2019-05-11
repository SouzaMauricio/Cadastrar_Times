<?php
    //Validate the request of delete from user//
    require_once "../model/ModelTeam.php";
    require_once "../model/ModelPlayer.php";

    $id = $_POST['id'];
    $type = $_POST["type"];
    $registrationTeam = new ModelTeam;
    $registrationPlayer = new ModelPlayer;

    if($type == "team"){
        $registrationTeam->Delete($id);
    }
    else{
        $registrationPlayer->Delete($id);
    }    
?>