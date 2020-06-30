<?php

    class Controllers{

        public function __contruct(){
            
            $this->views = new Views();
            $this->loadModel();
        }

        public function loadModel(){//Esta funcion es para cargar los modelos
            $model = get_class($this)."Model";
            $routClass = "Models/".$model.".php";  
            if(file_exists($routClass)){
                require_once($routClass);
                $this->model = new $model;
            }else{
                
            }
        }
    }
    
    
    

?>