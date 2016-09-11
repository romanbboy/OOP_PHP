<?php
    
    //Шаблон проектирования Factory - типа создание объектов класса во время работы приложения(фабрика)
    
    class MyFactory{
        
        //В перменную $name попадет имя класса
        static function factory($name){
            if(include $name.'.php'){
                return new $name;
            }else{
                throw new Excaption('Wrong file');
            }
        }
    }
    
    try{
        //$object = MyFactory::factory('Mysql');
    }catch(Exception $e){
        exit($e->getMessage());
    }
    
    
    
    //TASK 2 
    //Очень часто используют шаблон factory для создания объектов класса который является дочерним глобального класса
    //Глобальный класс 
    abstract class User{
        public $name;
        
        public function __construct($name){
            $this->name = $name;
        }
        
        public function get_name(){
            return $this->name;
        }
    }
    
    class Moderator extends User{
        public function get_name(){
            $str = parent::get_name();
            return $str.__CLASS__;
        }
    }
    
    class Admin extends User{
        public function get_name(){
            $str = parent::get_name();
            return $str.__CLASS__;
        }
    }
    
    class Guest extends User{
        public function get_name(){
            $str = parent::get_name();
            return $str.__CLASS__;
        }
    }
    
    //А вот и фабрика которая будет создавать объекты во время работы приложения
    class UserFactory{
        //Передаем имя класса и юзера которого мы хотим создать
        static function create($name,$userName){
            switch($name){
                case 'Moderator':
                    return new Moderator($userName);
                case 'Admin':
                    return new Admin($userName);
                case 'Guest':
                    return new Guest($userName);
                default:
                    exit('not isset');
            }
        }
    }
    
    $admin = UserFactory::create('Admin','Roman');
    echo $admin->get_name();
?>