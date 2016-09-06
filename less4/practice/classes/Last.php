<?php
    
    class Last implements IWidgets{
        public $last;
        
        public function init(){
            $this->last[] = 'Page1';
            $this->last[] = 'Page2';
            $this->last[] = 'Page3';
            $this->last[] = 'Page4';
        }
        
        public function get_body(){
            return $this->last;
        }
    }

?>