<?php

    class Errors extends Controllers{//extends es para eredar de Controllers

        public function __construct()
        {
            parent::__contruct();
        }

        public function notFound(){

            $this->views->getView($this,"error");
        }
    }

    $notFound = new Errors();
    $notFound->notFound();

?>