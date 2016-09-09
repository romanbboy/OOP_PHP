<?php

    class DbException extends Exception{
        
        public function __construct($msg){
            //Надо сначала подключать конструктор родителя главного а потом уже свои фишки добавлять
            parent::__construct($msg);
            $this->write_log($msg);
        }
        
        protected function write_log($msg){
            $data = 'Error - ' . $msg . '\n';
            //Записывает данные в файл(если файл не создан, то он его создает)
            //FILE_APPEND - будет записывать данные пришедшие друг под другом(если бы не вызвали эту штуку то данные бы постоянно перезаписывались)
            file_put_contents('log.txt',$data,FILE_APPEND);
        }
        
    }

?>