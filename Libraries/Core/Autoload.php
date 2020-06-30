<?php

    spl_autoload_register(function($class){//Esta funcion carga las clases de forma automatica

        if(file_exists("Libraries/".'Core/'.$class.'.php')){
                require_once("Libraries/".'Core/'.$class.'.php');
        }
    });

?>