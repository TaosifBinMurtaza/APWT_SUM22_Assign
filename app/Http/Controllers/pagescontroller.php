<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function welcome(){
        return view('users.home');
    }
    public function login(){
        return view('users.login');
    }
    public function register(){
        return view('users.registration');
    }
}