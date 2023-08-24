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
}
