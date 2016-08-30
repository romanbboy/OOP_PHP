<?php
    
    class Page{
        
        public $title;
        public $content;
        public $footer;
        
        public function __construct($t,$c,$f){
            $this->title = $t;
            $this->content = $c;
            $this->footer = $f;
        }
        
        public function render_body(){
            $str = '<h1>' . $this->title . '</h1>';
            $str .= '<p>' . $this->content . '</p>';
            $str .= '<h6>' . $this->footer . '</h6>';
            
            return $str;
        }
        
        public function test(){
            return $this->render_body();
        }
        
    }
    
    //Создал класс-потомок Index от Page
    class Index extends Page{
        //Добавил новые свойства
        public $slide;
        public $news;
        
        //Переопределил конструктор
        public function __construct($t,$c,$f,$s,$n){
            //Впихиваю конструктор родителя что бы не повторять код
            parent::__construct($t,$c,$f);
            $this->slide = $s;
            $this->news = $n;
        }
        
        public function render_body(){
            $str = parent::render_body();
            $str .= '<h5>' . $this->slide . '</h5>';
            $str .= '<h5>' . $this->news . '</h5>';
            
            return $str;
        }
    }
    
    //Теперь про полиморфизм
    //Создаем класс который будет принимать объекты других классов
    class Poly{
        public $ob;
        
        //Передаем в метод get_ob объект только класса Page!!!
        public function get_ob(Page $var){
            $this->ob[] = $var;
        }
        
        public function get_result(){
            foreach($this->ob as $item){
                echo $item->test();
            }
        }
    }
    
    $poly = new Poly();
    
    $page = new Page('Header', 'I like it, but its hard', 'The end');
    echo $page->render_body();
    
    $index = new Index('Index','Its an index content','footer_index','slide','news');
    echo $index->render_body();
    
    $poly->get_ob($page);
    //Так же можно $index тоже передать потому что он потомок класса Page
    $poly->get_ob($index);
    
    //Типа полиморфизм случился. У каждого объекта вызвался свой render_body
    $poly->get_result();
    
    /*
    print_r($index);
    
    foreach($index as $item){
        echo '<br>' . $item . '<br>';
    } */
    
    
    
    //Еще про полиморфизм
    class X{
        public function get(){
            echo 'This is X';
        }
        
        public function render(){
            $this->get();
        }
    }
    
    class Y extends X{
        public function get(){
            echo 'This is Y';
        }
    }
    
    $x = new X();
    $y = new Y();
    
    $x->get();
    $y->get();
    $x->render();
    $y->render();
    
    //Про спецификаторы доступа:public,protected,private
    //Желательно обозначать свойства примерно так _c(что бы визуально было легче определить что переменные с особым спецификатором доступа, но не паблик)
    class spec{
        public $a = 3;
        protected $_b = 5;
        private $_c = 'private';

    }
    
    $spec = new spec();
    echo $spec->_c;
    
    


?>