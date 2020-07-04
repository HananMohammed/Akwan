<?php

namespace App\Http\Controllers;

use App\NewServices;
use App\repository\CrudRepository;
use Illuminate\Http\Request;
use App\Http\Requests\NewServicesUpdateReq;
use App\Http\Requests\NewServicesReq;
class NewServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud ,NewServices $model)
    {
       $data= $crud->getAllData($model);
return view('dashboard.dashboardpages.newservices.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
return view('dashboard.dashboardpages.newservices.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud , NewServices $model ,NewServicesReq $req )
    {
         $crud->store($req,$model);
         return redirect()->route('dnewservices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewServices  $newServices
     * @return \Illuminate\Http\Response
     */
    public function show(NewServices $newServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewServices  $newServices
     * @return \Illuminate\Http\Response
     */
    public function edit(NewServices $model ,$id ,CrudRepository $crud )
    {
       $data= $crud->getById($model ,$id);
        return view('dashboard.dashboardpages.newservices.update' ,compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewServices  $newServices
     * @return \Illuminate\Http\Response
     */
    public function update( CrudRepository $crud ,NewServicesUpdateReq $req, NewServices $model ,$id)
    {
         $crud->update($req,$id,$model);
         return redirect()->route('dnewservices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewServices  $newServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewServices $model ,CrudRepository $crud , $id)
    {
         $crud->delete($id , $model);
         return redirect()->back();
     }
}
