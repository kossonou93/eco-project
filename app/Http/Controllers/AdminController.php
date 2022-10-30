<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('admin.home');
    }

    public function register()
    {
        return view('register');
    }

    public function bulletin()
    {
        return view('admin.bulletin');
    }
}
