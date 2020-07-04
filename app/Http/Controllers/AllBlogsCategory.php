<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;
use App\BlogCategory;
use App\BlogArticle;

class AllBlogsCategory extends Controller
{
    //
    public  function index($categoriesBlogId , FotterRepo $repo)
    {
        $allblog=BlogArticle::where('category_id',$categoriesBlogId)->paginate(3,['*'],'allblogs');
        $allBlogsCat=$repo->allblogs();
        $data=$repo->footerCollection();

        return view('homepage.all_blog' , compact('data' ,'allblog' , 'allBlogsCat'));
    }
}
