<?php 
    class BeansTeam{
        private $id;
        private $name;
        private $shelColor;
        private $dateFundation;

        function set_id($id){
            $this->id = $id;
        }
        function set_name($name){
            $this->name = $name;
        }
        function set_shelColor($shelColor){
            $this->shelColor = $shelColor;
        }
        function set_dateFundation($dateFundation){
            $this->dateFundation = $dateFundation;
        }
        function get_id(){
            return $this->id;
        }
        function get_name(){
            return $this->name;
        }
        function get_shelColor(){
            return $this->shelColor;
        }
        function get_dateFundation(){
            return $this->dateFundation;
        }
    }
?>