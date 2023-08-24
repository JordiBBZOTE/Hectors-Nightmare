<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    public function index(){
        $credentials = request()->validate([
        'email' => ['required', 'email', 'string'],
        'password' => ['required', 'string']]);
        $remember = request()->filled('remember');
        if(Auth::attempt($credentials, $remember)){
            request()->session()->regenerate();
            return redirect('home/main');
        }
        throw ValidationException::withMessages([
            'email' => 'No se encontraron coincidencias'
        ]);
    }

    public function main(){
        return view('home.banner');
    }
}