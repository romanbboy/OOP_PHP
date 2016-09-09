<?php

    //У одного блока try можно вызывать сколько угодно много catch
    class arr{
        
        public function view($array){
            //запускаем блок где возможно ошибка
            try{
                if(!is_array($array)){
                    //Происходит исключение.Код дальше игнорируется и выполняется блок catch. Класс Exception предназнаен специально для исключений(пишем только так и никак иначе)
                    throw new Exception();
                }
                foreach($array as $item){
                    echo $item . '<br>';
                }
            }catch(Exception $e){
                //В $e попадает то что нам выбросил throw
                exit('Wrong parametr');
            }
        }
    }
    
    //$arr = new arr();
    //$arr->view(2);
    
    class test{
        public function foo(){
            try{
                echo '<br> foo <br>';
                $this->first1();
                echo 'END foo <br>';
                
            }catch(Exception $e){
                echo 'My exception'. '<br>';
            }
        }
        
        public function first1(){
            echo 'This is - ' . __METHOD__ . '<br>';
            $this->first2();
            echo 'END ' . __METHOD__ . '<br>';
        }
        
        public function first2(){
            echo 'This is - ' . __METHOD__ . '<br>';
            //Попадем сразу в catch который находится в foo(в этом и прикол throw)
            throw new Exception();
            echo 'END ' . __METHOD__ . '<br>';
        }
    }
    
    //$test = new test();
    //$test->foo();
    
    class test2{
        public function __construct(){
            echo 'Create object';
        }
        
        public function __destruct(){
            echo 'delete object';
        }
    }
    
    function create(){
        echo 'My create<br>';
        $test2 = new test2();
        echo '<br>Error<br>';
            //Еще важная вещь. Перед тем как отправиться в catch оператор throw заставляет отработать деструктор у класса и только после этого переходит в catch
            throw new Exception('Error is appear');
    }
    
    try{
        create();
        
    }catch(Exception $e){
        echo $e->getMessage() . '<br>';
        echo $e->getCode()  . '<br>';
        echo $e->getFile()  . '<br>';
        echo $e->getLine()  . '<br>';
        print_r($e->getTrace()) ;
    }

?>