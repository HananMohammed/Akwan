<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;
use App\BlogCategory;
use App\BlogArticle;
use App\project_akwan;

class AllProjectsCategories extends Controller
{
    //

    public  function  index($categoriesId , FotterRepo $repo  )
    {
        $allprojects=project_akwan::where('category_id',$categoriesId)->paginate(6);
         // dd($categoriesId);
        $data=$repo->footerCollection();

        return view('homepage.all_projects' , compact('data' ,'allprojects'));
    }
}
