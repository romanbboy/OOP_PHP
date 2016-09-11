<?php

    class View extends AController{
        
        public function __construct(){
            //echo __CLASS__;
        }
        
        public function get_body(){
            if(isset($_GET['id'])){
                $id = (int)$_GET['id'];
                if($id != 0){
                    $db = new Model(HOST,USER,PASSWORD,DB);
                    $text = $db->get_one_db($id);
                    return $this->render('view',array('title'=>'View page',
                                                        'text'=>$text));
                }else{
                    exit('Wrong number');
                }
            }else{
                exit('Wrond id');
            }
        }
    }

?>