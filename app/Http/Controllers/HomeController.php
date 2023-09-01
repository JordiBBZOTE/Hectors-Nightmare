<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    public function index(Request $request){
        
        $User = "juanka";                               //HAY QUE CACHAR EL DATO 'NAME' DE LA BD
        $remember = $request->filled('remember');

        if(Auth::attempt($request->only('email', 'password'), $remember)){
            $request->session()->regenerate();
            
            return redirect()
            ->intended('home/main')
            ->with('username', $User);
        }

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