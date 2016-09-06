<?php
    
        
    //Класс так же можно сделать финальным который нельзя наследовать
    class User{
        public $name;
        
        public function __construct($name){
            $this->name = $name;
        }
        
        //Типа конструктор для клонов потому что обычный конструктор не вызывается для клонов
        //Если хочу запретить клонирование объекта, то пишу не public а private
        public function __clone(){
            $this->name = 'Clone';
        }
        
        //Финальные методы запрещено переопределять в дочерних классах
        public function can(){
            
        }
        
    }

?>