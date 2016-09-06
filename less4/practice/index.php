<?php
    
    header('Content-Type:text/html;charset="utf-8"');
    
    //Позволяет искать файлы для подключения в корне(Относительно этого индексного файла) и в папках которые мы задаем(в нашем случае classes)
    set_include_path(get_include_path().PATH_SEPARATOR.'classes');
    
    function __autoload($class){
        include $class . '.php';
    }
    
    $dir = new Render('classes');
    $dir->get_widgets();

?>