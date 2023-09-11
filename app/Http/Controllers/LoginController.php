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
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $image = $_POST['imguser'];
            $level = 1;
            $remembertoken = bin2hex(random_bytes(16));            ;

            
        
            $sql = "INSERT INTO usuarios (username, email, password, Imguser, level, remember_token) VALUES ('$username', '$email', '$password', '$image', '$level', '$remembertoken')";
            $result = mysqli_query($conn, $sql);
            
            return redirect()
            ->intended('login');
        }
    }
}
