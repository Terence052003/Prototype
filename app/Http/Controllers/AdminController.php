<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function welcome(){
        return view ('welcome');
    }
    public function forget_password(){
        return view ('password');
    }
    public function dashboard(){
        return view ('dashboard');
    }
}
