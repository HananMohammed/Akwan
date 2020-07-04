<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;
use App\BlogCategory;
use App\BlogArticle;


class BlogSearch extends Controller
{
    //

    public  function  index(FotterRepo $repo ,Request $request)
    {
        $sr=$request->search;
        $allblog=BlogArticle::where('article_en','LIKE','%'.$sr.'%')
            ->orWhere('article_ar','LIKE','%'.$sr.'%')
            ->paginate(3);
//dd($allblog);
        $data=$repo->footerCollection();

        return view('homepage.all_blog' , compact('data' ,'allblog'));
    }
}
