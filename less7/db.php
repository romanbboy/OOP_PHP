<?php
    include 'DbException.php';
    //Создадим своего ловца ошибок
    class db{
        public function __construct(){
            $db = mysql_connect('localhost','romanbef_phpcl','1921680117ipbg');
            if(!$db){
                throw new DbException('No connection with db<br>');
            }
            if(!mysql_select_db('romanbef_phpcl')){
                throw new DbException('No table');
            }
        }
    }
    
    try{
        $db = new db();
    }catch(DbException $e){
        echo $e->getMessage();
        exit();
    }

?>