<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;
use App\BlogCategory;
use App\BlogArticle;
use InstagramScraper\Instagram;

class AllBlog extends Controller
{
    public function index(FotterRepo $repo )
    {
        $allblog=$repo->allblogs();
        $allBlogsCat=$repo->allblogs();

        $data=$repo->footerCollection();

        return view('homepage.all_blog' , compact('data' ,'allblog' , 'allBlogsCat'));
    }
}
