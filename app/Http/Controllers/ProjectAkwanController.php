<?php

namespace App\Http\Controllers;


use App\project_akwan;
use App\repository\CrudRepository;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Project;

class ProjectAkwanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud , project_akwan $proj)
    {
        $data =$crud->getAllData($proj);
       return view('dashboard.dashboardpages.project_akwan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( CrudRepository $crud , Category $categoryModel)
    {
        $category = $crud->getAllData($categoryModel);

        return view('dashboard.dashboardpages.project_akwan.edit' ,compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $request ,CrudRepository $crud ,project_akwan $model)
    {
        $crud->store($request,$model);
        $data =$crud->getAllData($model);
        return view('dashboard.dashboardpages.project_akwan.index',compact('data'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project_akwan  $project_akwan
     * @return \Illuminate\Http\Response
     */
    public function show(project_akwan $project_akwan)
    {
        //
    }

    /**
     * @param $id
     * @param CrudRepository $crud
     * @param project_akwan $modelname
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, CrudRepository $crud , project_akwan $modelname , Category $categoryModel )
    {
       // dd($modelname::all());
        $data= $crud->getById( $modelname,$id) ;
         $category = $crud->getAllData($categoryModel);

         return view('dashboard.dashboardpages.project_akwan.update',compact('data','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project_akwan  $project_akwan
     * @return \Illuminate\Http\Response
     */
    public function update(  CrudRepository $crud,Project $req , $id, project_akwan $akwan )
    {
         $crud->update($req,$id , $akwan);
        $data = $crud->getAllData($akwan);
        return view('dashboard.dashboardpages.project_akwan.index' , compact('data'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project_akwan  $project_akwan
     * @return \Illuminate\Http\Response
     */
    public function destroy(project_akwan $project_akwan ,$id ,CrudRepository $crud )
    {
        $crud->delete($id,$project_akwan);
        return redirect()->back();
    }
}
