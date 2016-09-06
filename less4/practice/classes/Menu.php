<?php
    
    class Menu implements IWidgets{
        public $menu;
        
        public function init(){
            $this->menu[] = 'Home';
            $this->menu[] = 'Price';
            $this->menu[] = 'Payment';
            $this->menu[] = 'About';
        }
        
        public function get_body(){
            return $this->menu;
        }
    }

?>