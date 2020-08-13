<?php

    class Roles extends Controllers{//extends es para eredar de Controllers

        public function __construct()
        {
            parent::__contruct();
        }

        public function Roles(){
            
            $data['page_id'] = 3;
            $data['page_tag'] = "Roles Usuario";
            $data['page_title'] = "Roles Usuario ";
            $data['page_name'] = "Roles Usuario <small> Tienda Virtual</small>";
           
            $this->views->getView($this,"roles",$data);
        }


    }

?>