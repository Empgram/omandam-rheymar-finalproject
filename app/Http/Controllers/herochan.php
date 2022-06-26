<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class herochan extends Controller
{
    public function connect()
    {
        return view ('connect');
    }
    
    public function index()
    {
        return view ('welcome');
    }

    public function register()
    {
        return view ('register');
    }
    public function login()
    {
        return view ('login');
    }

    public function login1()
    {
        return view ('login1');
    }
    public function User()
    {
        return view ('User');
    }
    public function page()
    {
        return view ('page');
    }
    public function delete()
    {
        return view ('delete');
    }
    public function update()
    {
        return view ('update');
    }
    public function update1()
    {
        return view ('update1');
    }
    
}
