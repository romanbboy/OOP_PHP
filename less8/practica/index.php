<?php

    include 'config.php';
    header('Content-Type:text/html;charset="utf-8"');
    
    function __autoload($file){
        if(file_exists('controllers/'.$file.'.php')){
            require_once 'controllers/'.$file.'.php';
        }else{
            require_once 'model/'.$file.'.php';
        }
    }
    
    //Это типа точка входа для сайта
    if(isset($_GET['option'])){
        //strip_tags - убирает всякие теги для безопасности
        $class = strip_tags($_GET['option']);
        
        switch($class){
            case 'view':
                $init = new View();
                break;
            default:
                $init = new Index();
                break;
        }
    }else{
        $init = new Index();
    }
    
    echo $init->get_body();

?>