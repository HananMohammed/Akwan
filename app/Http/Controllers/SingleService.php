<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;
use App\NewServices;
use App\repository\CrudRepository;

class SingleService extends Controller
{
    public function index(FotterRepo $repo , $id , NewServices $serviceData ,CrudRepository $crudRepository )
    {
        $data=$repo->footerCollection();
        $service =$crudRepository->getById( $serviceData , $id);
        return view('homepage.singelservices',compact('data','service'));
    }
}
