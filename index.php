<?php
    include('db_include.php');
    include('classes/DB.php');
    include('classes/Page.php');
    
    $page = new Page();
    
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id != 0){
            $text = $page->get_one($id);
            echo $page->get_body($text,'view');
        }else{
            exit('Wrong parametr');
        }
        
    }else{
        $text = $page->get_all();
        echo $page->get_body($text,'main');
    }

?>