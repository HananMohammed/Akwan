<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use App\repository\CrudRepository;
use Illuminate\Http\Request;
use App\Http\Requests\BlogCategoryReq;
class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,BlogCategory $model)
    {
        $data =$crud->getAllData($model);
        return view('dashboard.dashboardpages.blogcategory.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.dashboardpages.blogcategory.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,BlogCategory $model ,BlogCategoryReq $req)
    {
        $crud->store($req,$model);
        $data=$crud->getAllData($model);
        return view('dashboard.dashboardpages.blogcategory.index' ,compact('data'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $model , CrudRepository $crud , $id)
    {
         $data=$crud->getById($model ,$id);
          return view('dashboard.dashboardpages.blogcategory.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(BlogCategoryReq $req ,CrudRepository $crud ,$id, BlogCategory $model)
    {
          $crud->update($req,$id,$model);
          return redirect()->route('dblogcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $model ,CrudRepository $crud , $id)
    {
         $crud->delete($id ,$model);
         return redirect()->back();
    }
}
