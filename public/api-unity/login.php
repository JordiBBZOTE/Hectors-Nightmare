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
        if (
            isset($_POST['username']) &&
            isset($_POST['password'])
        ) {

            $varUser = $_POST['username'];
            $varPass = $_POST['password'];
            $varPass = sha1($varPass);

            $sql = "SELECT * FROM `usuarios` WHERE `username` = '".$varUser."' and password= '".$varPass."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                $sql = "SELECT * FROM `usuarios` WHERE username='".$varUser."';";
                $result = $conn->query($sql);
                $text = '';
                while ($row = $result->fetch_assoc()) {
                    $text = "{#id#:".$row['id'].",#username#:#".$row['username']."#,#password#:#".$row['password']."#,#imguser#:#".$row['imguser']."#,#level#:".$row['level']."}";
                }
                echo '{
                       "codigo":205,
                       "mensaje":"Inicio de sesion correcta",
                       "respuesta":"'.$text.'"
                    }';
            } else {
                echo
                '{
                        "codigo":204,
                        "mensaje":"user o password incorrectos",
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
