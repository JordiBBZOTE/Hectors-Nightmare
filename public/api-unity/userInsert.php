<?php
include 'header.php';
try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_database);

    if (!$conn) echo
    '{
        "codigo":400,
        "mensaje":"Error en las credenciales",
        "respuesta":""
    }';
    else {
        if (
            isset($_POST['username']) &&
            isset($_POST['password']) &&
            isset($_POST['imguser']) &&
            isset($_POST['level'])
        ) {
            $varUser = $_POST['username'];
            $varPass = $_POST['password'];
            $varPass = sha1($varPass);
            $varimguser = $_POST['imguser'];
            $varLevel = $_POST['level'];

            $sql = "SELECT * FROM `usuarios` WHERE username='".$varUser."';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '{
                       "codigo":202,
                       "mensaje":"Usuario ya existe",
                       "respuesta":"'.$result->num_rows.'"
                    }';
            } else {
                $sql = "INSERT INTO `usuarios` (`id`, `username`, `password`, `imguser`, `level`) 
                VALUES (NULL, '".$varUser."', '".$varPass."', '".$varimguser."', '".$varLevel."');";
                if ($conn->query($sql) === TRUE) {

                    $sql = "SELECT * FROM `usuarios` WHERE username='".$varUser."';";
                    $result = $conn->query($sql);
                    $text = '';
                    while ($row = $result->fetch_assoc()) {
                        $text = "{
                            #id#:".$row['id'].",
                            #username#:#".$row['username']."#,
                            #password#:#".$row['password']."#,
                            #imguser#:".$row['imguser'].",
                            #level#:".$row['level'].",
                        }";
                    }

                    echo '{
                   "codigo":201,
                   "mensaje":"Usuario Registrado",
                   "respuesta":"'.$text.'"
                }';
                } else {
                    echo
                    '{
                    "codigo":401,
                    "mensaje":"Error al crear el usuario",
                    "respuesta":""
                }';
                }
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
