<?php

    class Views{

        function getView($controller, $view,$data=""){

            $controller = get_class($controller);//obtiene la clase controller que pasa como parametro
            if($controller == "Home"){
                $view = "Views/".$view.".php";
            }else{
                $view = "Views/".$controller."/".$view.".php";
            }
            require_once($view);
        }
    }

?>