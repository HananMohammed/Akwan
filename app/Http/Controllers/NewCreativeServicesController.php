<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewCreativeServicesReq;
use App\NewCreativeServices;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class NewCreativeServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,NewCreativeServices $model )
    {
        $data= $crud->getAllData($model);
        return view('dashboard.dashboardpages.creativeservice.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardpages.creativeservice.edit' );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,NewCreativeServices $model ,NewCreativeServicesReq $req)
    {
         $crud->store($req ,$model);
         return redirect()->route('dcreativeservices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewCreativeServices  $newCreativeServices
     * @return \Illuminate\Http\Response
     */
    public function show(NewCreativeServices $newCreativeServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewCreativeServices  $newCreativeServices
     * @return \Illuminate\Http\Response
     */
    public function edit(NewCreativeServices $model,$id ,CrudRepository $crud)
    {
        $data= $crud->getById($model ,$id);
        return view('dashboard.dashboardpages.creativeservice.update' ,compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewCreativeServices  $newCreativeServices
     * @return \Illuminate\Http\Response
     */
    public function update(NewCreativeServicesReq $req ,$id ,CrudRepository $crud, NewCreativeServices $model)
    {
        $crud->update($req,$id,$model);
        return redirect()->route('dcreativeservices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewCreativeServices  $newCreativeServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewCreativeServices $model ,$id ,CrudRepository $crud)
    {
        $crud->delete($id , $model);
        return redirect()->back();
    }
}
