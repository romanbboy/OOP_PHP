<?php
    
    //Шаблон проектирования Strategy - по определенному условию выполняется определенный скрипт(типа распределение)
    //Основой в шаблоне Strategy является базовый класс(у нас FileStrategy) и базовый метод(у нас createFile)
    abstract class FileStrategy{
        abstract function createFile($name);
    }
    
    class Zip extends FileStrategy{
        public function createFile($name){
            return $name.'.zip';
        }
    }
    
    class Targz extends FileStrategy{
        public function createFile($name){
            return $name.'.tar.gz';
        }
    }
    
    //strstr - выводит первое вхождение подстроки и до конца строки
    if(strstr($_SERVER['HTTP_USER_AGENT'], 'Win')){
        $object = new Zip();
    }else{
        $object = new Targz();
    }
    
    $file1 = $object->createFile('Photo');
    $file2 = $object->createFile('Documents');
    
    echo '<p>New files</p>';
    echo '<a href="'.$file1.'">First file</a><br>';
    echo '<a href="'.$file2.'">Second file</a>';
?>