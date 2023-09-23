<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    public function index(Request $request){
        
        $remember = $request->filled('remember');
        $User = User::where('email', $request->email)->first();
      
        if($User->password === sha1($request->password)){
            Auth::login($User);
            $request->session()->regenerate();
            return redirect()
            ->intended('home/main');
        }

        /*if(Auth::attempt($request->only('email', 'password'), $remember)){
            $request->session()->regenerate();
            
            return redirect()
            ->intended('home/main')
            ->with('username', $User);
        }*/

        throw ValidationException::withMessages([
            'email' => 'No se encontraron coincidencias'
        ]);
    }

    public function main(){
        return view('home.banner');
    }

    public function scores(){
        
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "hectorisafraid";

        $conexion = mysqli_connect($host, $user, $pass, $db);

        if (!$conexion) {
            die("Connection failed: " . mysqli_connect_error());
        }

        
        $iduseractual = htmlentities(Auth::user()->id, ENT_QUOTES,'utf-8');   // DE AQUI VIENE EL ID A COMPARAR EN LA QUERIE


        //ESTOS SON LOS REGISTROS DE LA BD

        $query = "SELECT r.id, u.username, r.time, r.score
                  FROM ranking r
                  INNER JOIN usuarios u ON r.id = u.id
                  ORDER BY r.time DESC LIMIT 5";

        
        $resultados=mysqli_query($conexion,$query);



        //ESTOS SON LOS RESULTADOS DEL USUARIO LOGGEADO

        $query2 = "SELECT r.id, u.username, r.time, r.score, 
                   RANK() OVER (ORDER BY r.time DESC) AS rango
                   FROM ranking r
                   INNER JOIN usuarios u ON r.id = u.id
                   WHERE r.id = {$iduseractual}";

        $miResultado=mysqli_query($conexion,$query2);

        //ESTE ES EL RESULTADO DEL RANKING DEL USUARIO ACTUAL

        $query3 = "SELECT position
                   FROM (
                       SELECT id, time, score, ROW_NUMBER() OVER (ORDER BY time DESC) AS position
                       FROM ranking
                  ) AS subquery
                  WHERE id = {$iduseractual}";

        $ranking=mysqli_query($conexion,$query3);


        //SE DEVUELVE LA VISTA JUNTO CON LOS DATOS DE LOS QUERIES OBTENIDOS

        return view('home.scores', [        
            'resultados' => $resultados,
            'miResultado' => $miResultado,
            'ranking' => $ranking
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); 
        return redirect()
        ->intended('login');
    }
    
}