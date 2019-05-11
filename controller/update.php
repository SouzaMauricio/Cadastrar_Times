<?php
    //Validate a search of user data for the Update//
    require_once "../model/ModelTeam.php";
    require_once "../model/ModelPlayer.php";

    $id = $_POST['id'];
    $type = $_POST['type'];

    if($type == "team"){
        $update = new ModelTeam;
        $data = $update->SelectTeam($id);
        $array = array(utf8_decode($data->get_name()), utf8_decode($data->get_shelColor()), $data->get_dateFundation());
    }
    else{
        $update = new ModelPlayer;
        $data = $update->SelectPlayer($id);
        $array = array(utf8_decode($data->get_name()), utf8_decode($data->get_lastName()), utf8_decode($data->get_shirtNumber()), $data->get_team());
    }
    //Return the data to Ajax
    echo json_encode($array);
?>