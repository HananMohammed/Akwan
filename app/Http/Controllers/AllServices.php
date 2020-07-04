<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;

class AllServices extends Controller
{
    public function index(FotterRepo $repo)
    {
        $data=$repo->footerCollection();
        return view('homepage.all_service',compact('data'));
    }
}
