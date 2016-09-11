<?php
    
    class Model{
        public $db;
        
        public function __construct($host,$user,$pass,$db){
            $this->db = mysql_connect($host,$user,$pass);
            if(!$this->db){
                exit('Error');
            }
            if(!mysql_select_db($db,$this->db)){
                exit("Error2");
            }
            mysql_query("SET NAMES UTF8");
            
            return $this->db;
        }
        
        public function get_all_db(){
            $sql = "select id_auto,name,cost from auto";
            
            $res = mysql_query($sql);
            if(!$res){
                return false;
            }else{
                for($i=0; $i<mysql_num_rows($res); $i++){
                    $row[] = mysql_fetch_assoc($res);
                }
            }
            
            return $row;
            
        }
        
        public function get_one_db($id){
            $sql = "select id_auto,name,description from auto where id_auto=$id";
            
            $res = mysql_query($sql);
            if(!$res){
                return false;
            }else{
                $row = mysql_fetch_assoc($res);
            }

            return $row;
        }
    }

?>