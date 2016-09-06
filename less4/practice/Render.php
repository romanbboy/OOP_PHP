<?php
    
    class Render{
        public $dir;
        public $name;
        public $content;
        
        public function __construct($dir){
            //is_dir проверяется является ли переменная директорией или папкой
            if(is_dir($dir)){
                //Запишем массив содержимого нашей директории
                //scandir - Получить список файлов и каталогов, расположенных по указанному пути
                $this->dir = scandir($dir);
                //print_r($this->dir);
            }else{
                exit('Wrong dir');
            }
        }
        
        public function get_name(){
            foreach($this->dir as $item){
                if($item == '.' || $item == '..' || $item == 'IWidgets.php'){
                    //Просто переходим на следующую итерацию ничего не делая
                    continue;
                }
                $this->name[] = $item;
            }
            //print_r($this->name);
        }
        
        public function get_widgets(){
            //Получаем массив name;
            $this->get_name();
            foreach($this->name as $file){
                //Отбрасываем в названии .php
                $class = basename($file,'.php');
                //!!Важно! У нас на каждой итерации в $class имя файла!(например Last) Так что таким образом мы создаем новый объект ob класса Last(тоже самое что $ob = new Last();) 
                $ob = new $class;
                //var_dump($ob); Проверяет что попало в переменную
                if($ob instanceof IWidgets){
                    $ob->init();
                    $this->content[] = $ob->get_body();
                    unset($ob);
                }else{
                    unset($ob);
                    continue;
                }
            }
            $this->view();
        }
        
        protected function view(){
            foreach($this->content as $item){
                echo '<div style="border:1px solid black;width:200px;padding:20px">';
                    foreach($item as $res){
                        echo '<p>' . $res . '</p>';
                    }
                echo '</div>';
            }
        }
    }

?>