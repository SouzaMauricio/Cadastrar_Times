<?php
    require_once "../model/ModelPlayer.php";
    require_once "../beans/BeansPlayer.php";
    
    $player = new BeansPlayer;
    $registration = new ModelPlayer;

    //anti-sqlinjection
    $player->set_name(ltrim(rtrim(preg_replace('/[^[:alpha:] _çÇ123456789éÉêÊáÁàÀâÂóÓíÍôÔúÚüÜ]/', '',$_POST['name']))));
    $player->set_lastName(ltrim(rtrim(preg_replace('/[^[:alpha:] _çÇ123456789éÉêÊáÁàÀâÂóÓíÍôÔúÚüÜ]/', '',$_POST['lastName']))));

    $player->set_shirtNumber(ltrim(rtrim((int)$_POST['shirtNumber'])));
    if(isset($_POST['team']))
        $player->set_team(ltrim(rtrim((int)$_POST['team'])));

    $action = $_POST['action'];

    //Validate if fields are empty
    if($action == "update"){
        //Validate ID for update
        $player->set_id(ltrim(rtrim((int)$_POST['id'])));
        if(empty($player->get_id())){
            echo "ID inválido!";
            die();
        }
    }
    if(empty($player->get_name())){
        echo "Nome inválido!";
        die();
    }
    if(empty($player->get_lastName())){
        echo "Sobrenome inválido!";
        die();
    }
    if(empty($player->get_shirtNumber())){
        echo "Digite um Número de camisa";
        die();
    }
    if(empty($player->get_team())){
        echo "Time inválido!";
        die();
    }

    //Format uf8 to BD
    $player->set_name(utf8_encode($player->get_name()));
    $player->set_lastName(utf8_encode($player->get_lastName()));

    switch($action){
        case "insert":
            echo $registration->Registration($player);
            break;
        case "update":
            echo $registration->Update($player);
            break;
    }
  
?>