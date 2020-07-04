<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogCategory;
use App\BlogArticle;
use App\Http\Requests\BlogArticleUpdateReq;
use App\Http\Requests\BlogArticleReq;
use App\repository\CrudRepository;
use App\repositoryhome\FotterRepo;

class SingleBlog extends Controller
{
    public function index(FotterRepo $repo , $id , CrudRepository $crudRepository , BlogArticle $SingleBlogArticle)
    {
        $data=$repo->footerCollection();
        $singleBlog =$crudRepository->getById( $SingleBlogArticle , $id);
        return view('homepage.single_blog' , compact('data' ,'singleBlog'));
    }
}
