<?php
    
    class Page{
        
        //Константа класса, а не объекта(мы не можем обратиться к этой переменной через объект)
        //Для визуальной простоты все константы пишутся в верхнем регистре
        const NUMBER = 1;
        
        public function get_const(){
            //Обратиться к константе в самом классе
            echo self::NUMBER;
        }
        
    }
    
    class Index extends Page{
        //Константы класса доступны в дочерних классах
        public function __construct(){
            echo self::NUMBER;
        }
    }
    
    $page = new Page();
    
    //Обратиться к константе можно так
    //echo Page::NUMBER;
    
    $page->get_const();
    
    echo '<br>';
    
    $index = new Index();
    
    //Проверяем является ли это константой defined
    if(defined('Page::NUMBER')){
        echo 'Its constanta';
    }else{
        echo 'Its not a constanta';
    }
    
?>