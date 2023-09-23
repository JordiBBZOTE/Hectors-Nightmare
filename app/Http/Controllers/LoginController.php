<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function banner(){
        return view('login.banner');
    }

    public function index(){
        return view('login.index');
    }
    public function createAccount(){
        return view('login.createAccount');
    }

    public function validacion(){
        $servername = "localhost";
        $database = "hectorisafraid";
        $username = "root";
        $password = "";
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $image = $_POST['imguser'];
            $level = 1;
            $remembertoken = bin2hex(random_bytes(16));

            $consult="SELECT*FROM usuarios";
            $results=mysqli_query($conn,$consult);

            $filas=mysqli_fetch_array($results);

            if($filas['username']==$username || $filas['email']==$email){

               if($filas['username']==$username ){
                    printf("<script type='text/javascript'>alert('ESTE USUARIO YA EXISTE PULSA OK'); 
                    setTimeout(function(){
                        window.location.href = 'form';
                    }, 10);
                    </script>");
               }else{
                    printf("<script type='text/javascript'>alert('ESTE CORREO YA EXISTE PULSA OK'); 
                    setTimeout(function(){
                        window.location.href = 'form';
                    }, 10);
                    </script>");
               }
            }else{
                $sql = "INSERT INTO usuarios (username, email, password, Imguser, level, remember_token) VALUES ('$username', '$email', '$password', '$image', '$level', '$remembertoken')";
                $result = mysqli_query($conn, $sql);
                $sql2 = "INSERT INTO ranking (id, time, score) VALUES (LAST_INSERT_ID(), '0', '0')";
                $result2 = mysqli_query($conn, $sql2);
                
                return redirect()
                ->intended('login');
            }
        }
    }
}
                