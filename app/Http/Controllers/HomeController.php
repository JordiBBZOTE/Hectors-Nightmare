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
        
                                    //HAY QUE CACHAR EL DATO 'NAME' DE LA BD
        $remember = $request->filled('remember');

        $User = User::where('email', $request->email)->first();

        if($User->password === sha1($request->password)){
            Auth::login($User);
            $request->session()->regenerate();
            return redirect()
            ->intended('home/main')
            ->with('username', $User->username);
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

    public function story(){
        return view('home.story');
    }

    public function scores(){
        return view('home.scores');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); 
        return redirect()
        ->intended('login');
    }
    
}