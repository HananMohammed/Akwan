<?php

namespace App\Http\Controllers;
use App\Http\Requests\SubServiceReq;
use App\repository\CrudRepository;
use App\SubService;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,SubService $model )
    {
        $data = $crud->getAllData($model);
        return view('dashboard.dashboardpages.subservice.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardpages.subservice.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,SubService $model ,SubServiceReq $req)
    {
         $crud->store($req ,$model);
        return redirect()->route('dsubservice.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function show(SubService $subService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudRepository $crud ,SubService $model ,$id)
    {
        $data= $crud->getById($model ,$id);
        return view('dashboard.dashboardpages.subservice.update' ,compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRepository $crud ,SubService $model ,$id ,SubServiceReq $req)
    {
        $crud->update($req,$id,$model);
        return redirect()->route('dsubservice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudRepository $crud ,SubService $model ,$id )
    {
        $crud->delete($id , $model);
        return redirect()->back();
    }
}
