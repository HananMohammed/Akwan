<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotFound extends Controller
{
    //
    public  function index()
    {
        abort('404');
        return view('homepage.404');
    }
}
