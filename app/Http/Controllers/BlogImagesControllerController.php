<?php

namespace App\Http\Controllers;
use App\Http\Requests\BlogImagesReq;
use App\BlogImagesController;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class BlogImagesControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,BlogImagesController $model)
    {
       $data= $crud->getAllData($model);
        return  view('dashboard.dashboardpages.blogimages.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,BlogImagesController $model ,BlogImagesReq $req)
    {
         $crud->store($req ,$model);
         return redirect()->route('dblogimage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogImagesController  $blogImagesController
     * @return \Illuminate\Http\Response
     */
    public function show(BlogImagesController $blogImagesController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogImagesController  $blogImagesController
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogImagesController $blogImagesController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogImagesController  $blogImagesController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogImagesController $blogImagesController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogImagesController  $blogImagesController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudRepository $crud ,BlogImagesController $model ,$id)
    {
        $crud->delete($id ,$model);
        return redirect()->back();
    }
}
