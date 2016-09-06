<?php
    
    echo '<meta charset="utf-8">';
    //Функция автозагрузки классов(что бы сто файлов через include не подключать)
    //В $var попадает имя класса(в нашем примере это Customer)
    function __autoload($var){
        include 'classes/'.$var.'.php';
    }

    $user = new Customer('Roman');
    
    //instanceof - позволяет проверить принадлежит ли объект определенному классу
    //так же можно проверить принадлежит ли объект к классу который является дочерним
    if($user instanceof User){
        if($user instanceof Customer){
            echo '$user принадлежит классу Customer который является дочерним классом класса User';
        }else{
            echo '$user принадлежит классу User';
        }
    }

    /* Создаем обычнную ссылку на объект(при этом через нее можем менять значения объекта $user)
    $user2 = $user;  // $user2 теперь просто как ССЫЛКА(это не новый объект с теми же свойствами и методами) на объект $user
    $user2->name = 'new str'; 
    echo $user->name; */
    
    // При клонировании конструктор класса не вызывается, вызывается function __clone, если он есть
    $user2 = clone $user;

    echo $user->name;
    echo $user2->name;
 
?>