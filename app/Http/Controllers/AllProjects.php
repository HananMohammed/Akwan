<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;
use App\BlogCategory;
use App\BlogArticle;
use App\project_akwan;

class AllProjects extends Controller
{
    public function  index(FotterRepo $repo)
    {
        $allprojects=$repo->ProjectAkwan();
        $data=$repo->footerCollection();
      //  dd($allprojects);
        return view('homepage.all_projects',compact('data' , 'allprojects'));
    }
}
