<?php
include 'header.php';
try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_database);

    if (!$conn) echo
    '{
        "codigo":400,
        "mensaje":"Error: en las credenciales",
        "respuesta":""
    }';
    else echo '{
        "codigo":200,
        "mensaje":"Susses: Coneccion correcta",
        "respuesta":""
    }';
} catch (Exception $e) {
    echo
    '{
        "codigo":404,
        "mensaje":"error la base de datos caida",
        "respuesta":""
    }';
}
include 'footer.php';
