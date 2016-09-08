<?php
    echo '<meta charset="utf-8">';
    class Types{
        private $vars = array();
        
        static $type = array('name' => 'string', 'number' => 'integer');
        
        public function __set($name,$value){
            //Если существует ключ $name(например number) в массиве $type то:
            if(array_key_exists($name,self::$type)){
                //Если значение ключа соответствует указанному типу данных
                if($this->my_foo(self::$type[$name],$value)){
                    $this->vars[$name] = $value;
                }else{
                    exit('Error types');
                }
            }else{
                exit("Error name");
            }
        }
        
        public function __get($name){
            if(array_key_exists($name,$this->vars)){
                return $this->vars[$name];
            }
        }
        
        protected function my_foo($case,$val){
            switch($case){
                case 'string':
                    return is_string($val);
                    break;
                case 'integer':
                    return is_integer($val);
                    break;
                default:
                    return false;
            }
        }
    }
    
    $types = new Types();
    $types->number1 = 1;
    echo $types->number1;

?>