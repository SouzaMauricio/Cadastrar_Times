<?php
    class BeansPlayer{
        private $id;
        private $name;
        private $lastName;
        private $team;
        private $shirtNumber;

        function set_id($id){
            $this->id = $id;
        }
        function set_name($name){
            $this->name = $name;
        }
        function set_lastName($lastName){
            $this->lastName = $lastName;
        }
        function set_team($team){
            $this->team = $team;
        }
        function set_shirtNumber($shirtNumber){
            $this->shirtNumber = $shirtNumber;
        }
        function get_id(){
            return $this->id;
        }
        function get_name(){
            return $this->name;
        }
        function get_lastName(){
            return $this->lastName;
        }
        function get_team(){
            return $this->team;
        }
        function get_shirtNumber(){
            return $this->shirtNumber;
        }
    }
?>