<?php

    define('db_server', 'localhost');
    define('db_username', 'root');
    define('db_password', '');
    define('db_name', 'sistema-registro');

    $conexion = mysqli_connect(db_server, db_username, db_password, db_name);

    if($conexion === false){
        echo("ERROR DE LA CONEXIÓN " . mysgli_connect_error());
    } else {
        echo("CONEXIÓN ESTABLECIDA");
    }

?>