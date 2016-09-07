<?php
    
    class Car{
        
        //Статическое свойство
        static public $color = 'red';
        static public $hi = 'hi hi<br>';
        public $speed;
        
        public function get_static(){
            echo self::$color;
        }
        
        //В статическом методе можно манипулировать ТОЛЬКО статическими переменными
        static public function st_method(){
            echo self::$hi;
        }
        
    }
    
    class Toyota extends Car{
        public function get(){
            echo self::$color;
        }
    }

    $car = new Car();
    $car->st_method();
    
    //echo Car::$color;
    //$car->get_static();
    
    $toyota = new Toyota();
    //$toyota->get();    
    
    //Тут мы создаем НОВУЮ переменную color и она будет обычная(не статическая)
    $toyota->color = 'hello';
    echo $toyota->color.'<br>';
    echo Car::$color.'<br>';
    
    //Статическое свойство отображаться не будет, а обычное будет
    var_dump($toyota);
    
?>