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
    else {
        if (isset($_POST['username'])) {
            $varUser = $_POST['username'];

            $sql = "SELECT * FROM `usuarios` WHERE username='".$varUser."';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '{
                       "codigo":202,
                       "mensaje":"Usuario ya existe",
                       "respuesta":"'.$result->num_rows.'"
                    }';
            } else {
                echo
                '{
                        "codigo":203,
                        "mensaje":"Usuario no existe",
                        "respuesta":""
                    }';
            }
        } else {
            echo
            '{
                    "codigo":402,
                    "mensaje":"Error datos faltantes",
                    "respuesta":""
                }';
        }
    }
} catch (Exception $e) {
    echo
    '{
            "codigo":404,
            "mensaje":"Error Base de datos caida",
            "respuesta":""
        }';
}

include 'footer.php';
