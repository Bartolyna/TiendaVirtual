<?php

    class Dashboard extends Controllers{//extends es para eredar de Controllers

        public function __construct()
        {
            parent::__contruct();
        }

        public function dashboard(){
            
            $data['page_id'] = 2;
            $data['page_tag'] = "Dashboard - Tienda Virtual";
            $data['page_title'] = "Dashboard - Tienda Virtual";
            $data['page_name'] = "dashboard";
           
            $this->views->getView($this,"dashboard",$data);
        }


    }

?>