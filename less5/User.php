<?php
    header('ContentType:text/html;charset="utd-8"');
    //Псевдоконстанты
    class User{
        
        public function my_method(){
            echo 'Текущий класс - ' . __CLASS__.'<br>';
            echo 'Текущий метод - ' . __METHOD__.'<br>';
            echo 'Текущий файл - ' . __FILE__.'<br>';
            echo 'Текущий строка - ' . __LINE__.'<br>';
        }
        
    }    
    
    $user = new User();
    $user->my_method();
    
?>