<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once "../model/ModelTeam.php";
    require_once "../beans/BeansTeam.php";
    $team = new BeansTeam;
    $registration = new ModelTeam;

    //anti-sqlinjection
    $team->set_name(ltrim(rtrim(preg_replace('/[^[:alpha:] _çÇ123456789éÉêÊáÁàÀâÂóÓíÍôÔúÚüÜ]/', '',$_POST['name']))));
    $team->set_shelColor(ltrim(rtrim(preg_replace('/[^[:alpha:] _çÇ123456789éÉêÊáÁàÀâÂóÓíÍôÔúÚüÜ]/', '',$_POST['shelColor']))));
    $team->set_dateFundation(ltrim(rtrim($_POST['dateFundation'])));
    //Validate if fields are empty//

    $action = $_POST['action'];
    if($action == "update"){
        //Validate ID for update
        $team->set_id(ltrim(rtrim((int)$_POST['id'])));
        if(empty($team->get_id())){
            echo "ID inválido!";
            die();
        }
    }
    if(empty($team->get_name())){
        echo "Nome inválido!";
        die();
    }
    if(empty($team->get_shelColor())){
        echo "Cor do escudo inválido!";
        die();
    } 

    //Format uf8 to BD
    $team->set_name(utf8_encode($team->get_name()));
    $team->set_shelColor(utf8_encode($team->get_shelColor()));

    //Validate Date
    $array = explode('-', $team->get_dateFundation());
    if(count($array) == 3){
        $d = (int)$array[2];
        $m = (int)$array[1];
        $y = (int)$array[0];
        if(!checkdate($m, $d, $y)){
            echo "Data inválida!";
            die();
        }
    }else{
        echo "Data inválida!";
        die();
    }
    //Validate against future date
    $date = date('Y-m-d');
    if($team->get_dateFundation() > $date){
        echo "Não é permitido data futura!";
        die();
    }
    
    switch($action){
        case "insert":
            echo $registration->Registration($team);
            break;
        case "update":
            echo $registration->Update($team);
            break;
    }  
?>