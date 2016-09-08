<?php
    
    class minmax{
        public function __call($method,$params){
            //обязательно надо передать параметры в несуществующий метод при его вызове
            if(!is_array($params)){
                return false;
            }
            
            $value = $params[0];
            
            if($method == 'min'){
                for($i=0; $i<count($params); $i++){
                    if($params[$i] < $value){
                        $value = $params[$i];
                    }
                }
            }
            if($method == 'max'){
                for($i=0; $i<count($params); $i++){
                    if($params[$i] > $value){
                        $value = $params[$i];
                    }
                }
            }
            
            return $value;
        }
    }
    
    $minmax = new minmax();
    
    echo $minmax->max(10,20,2,-3,5,1);
    
    
    
?>