<?php
    include('IAdmin.php');
    include('IUser.php');
    include('AUser.php');
    include('User.php');
    include('Moder.php');
    
    
    //В абстрактных классах нельзя создавать объекты. Это типа черновик. Обычно создается обычный класс потомок от абстрактного класса и там уже можно с него работать
    //$auser = new AUser();
    
    $user = new Moder();
    
    echo $user->get();
    
    
    

?>