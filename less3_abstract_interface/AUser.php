<?php
    
    //Обычно перед названием абстрактного класса пишут большую букву А, что бы легче в дальнейшем было найти в коде
    //Можно наследовать от нескольких интерфейсов(но только от интерфейсов и все)
    abstract class AUser implements IUser{
        public $user = 'Viktor';
        public $role;
        
        public function get_user($a){
            return $this->user;
        }
        
        public function get_role(){
            
        }
        
        public function call(){
            
        }
        
        //Абстрактный метод который обязательно должен быть переопределен в классе наследнике иначе программа не будет работать
        //Нужен опять как черновик, что типа ты этот метод будешь может быть в дальнейшем использовать
        //Абстрактный метод объявдяется ТОЛЬКО в абстрактном классе(нельзя объявить в обычном классе)
        abstract function can($a,$b);
    }

?>