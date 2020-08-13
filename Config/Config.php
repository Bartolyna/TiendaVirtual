<?php

    //define("BASE_URL", "http://localhost/Tienda_virtual");
    const BASE_URL = "http://localhost/Tienda_virtual";

    //Zona horaria 
    date_default_timezone_set('America/Bogota');

    //Datos de conexion a Base de Datos
    const DB_HOST = "localhost";
    const DB_NAME = "tienda";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=uft8";
    
    //Delimitadores decimal y millar Ej. 24,0000.3
    const SPD = ",";
    const SPM = ".";

    //Simbolo de moneda
    const SMONEY = "$";
?>