<?php

namespace App\Http\Controllers;
use App\BlogCategory;
use App\BlogArticle;
use App\Http\Requests\BlogArticleUpdateReq;
use App\Http\Requests\BlogArticleReq;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class BlogArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,BlogArticle $model)
    {
         $data = $crud->getAllData($model);
         return view('dashboard.dashboardpages.blogarticle.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CrudRepository $crud ,BlogCategory $category)
    {
        $category= $crud->getAllData($category);
        return view('dashboard.dashboardpages.blogarticle.edit' ,compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,BlogArticle $model ,BlogArticleReq $req )
    {
         $crud->store($req,$model);
         return redirect()->route('dblogarticle.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function show(BlogArticle $blogArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogArticle $model ,CrudRepository $crud ,$id ,BlogCategory $category)
    {
        $category= $crud->getAllData($category);

        $data =$crud->getById($model ,$id);
         return view('dashboard.dashboardpages.blogarticle.update',compact('data' ,'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function update(BlogArticleUpdateReq $req ,CrudRepository $crud ,$id, BlogArticle $model)
    {
         $crud->update($req,$id,$model);
         return redirect()->route('dblogarticle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudRepository $crud ,BlogArticle $model ,$id)
    {
         $crud->delete($id,$model);
         return redirect()->back();
    }
}
