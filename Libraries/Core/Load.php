<?php

$controllerFile = "Controllers/".$controller.".php";
    
    if(file_exists($controllerFile)){//Valida Si el controlador existe
        require_once($controllerFile);
        $controller = New $controller();

        if(method_exists($controller, $method)){//Valida si el metodo existe
            
            $controller->{$method}($params);
        }else{
            require_once("Controllers/Error.php");
        }
    }else{
        
        require_once("Controllers/Error.php");
    }

?>