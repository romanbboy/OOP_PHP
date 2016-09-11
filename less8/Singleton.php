<?php
    
    //Шаблоны проектирование
    //Singleton - смысл в том что мы работаем только с ОДНИМ объектом класса, а все остальные это просто ссылки на этот объект
    class Counter{
        
        static $instance = null;
        protected $count = 0;
        
        static function get_instance(){
            //Альтернативная запись if(self::$instance instanceof self)
            if(self::$instance !=null){
                return self::$instance;
            }
            //Альтернативная запись  return self::$instance = new self;
            return self::$instance = new Counter();
        }
        
        private function __construct(){
            echo 'Create object';
        }
        
        private function __clone(){
            
        }
        
        public function set(){
            $this->count++;
        }
        
        public function get(){
            return $this->count;
        }
    }
    
    //$counter = new Counter();
    $ob = Counter::get_instance();
    $ob->set();
    
    $ob1 = Counter::get_instance();
    $ob1->set();
    
    $ob2 = Counter::get_instance();
    $ob2->set();

    echo $ob->get();
?>