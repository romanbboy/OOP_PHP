<?php

    class Index extends AController{
        
        public function __construct(){
            //echo __CLASS__;
        }
        
        public function get_body(){
            $db = new Model(HOST,USER,PASSWORD,DB);
            $text = $db->get_all_db();
            return $this->render('index',array('title'=>'Index page',
                                                'text'=>$text));
        }
    }

?>