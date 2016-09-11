<?php

    abstract class AController{
        
        abstract function get_body();
        
        //Типа шаблонизатор
        protected function render($file,$params){
            //extract - из массива делает переменные у которых: название переменной - это ключ, а значение переменной - это значение этого ключа в массиве(хорошая вещь)
            extract($params);
            ob_start();
            include('views/'.$file.'.php');
            return ob_get_clean();
        }
        
    }

?>