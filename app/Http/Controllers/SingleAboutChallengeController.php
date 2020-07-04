<?php

namespace App\Http\Controllers;

use App\repository\CrudRepository;
use App\SingleAboutChallenge;
use App\Http\Requests\AboutSingleChallenge;
use Illuminate\Http\Request;

class SingleAboutChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,SingleAboutChallenge $model )
    {
        $data = $crud->getAllData($model);

        return view('dashboard.dashboardpages.single_about_challenge.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardpages.single_about_challenge.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,SingleAboutChallenge $model , AboutSingleChallenge $req )
    {
         $crud->store($req , $model);
         $data= $crud->getAllData($model);
         return view('dashboard.dashboardpages.single_about_challenge.index',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SingleAboutChallenge  $singleAboutChallenge
     * @return \Illuminate\Http\Response
     */
    public function show(SingleAboutChallenge $singleAboutChallenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SingleAboutChallenge  $singleAboutChallenge
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudRepository $crud ,$id ,SingleAboutChallenge $model)
    {
         $data=$crud->getById($model,$id);
         return view('dashboard.dashboardpages.single_about_challenge.update' ,compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SingleAboutChallenge  $singleAboutChallenge
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRepository $crud , AboutSingleChallenge $req,$id , SingleAboutChallenge $model)
    {
         $crud->update($req,$id ,$model);
         $data = $crud->getAllData($model);
         return view('dashboard.dashboardpages.single_about_challenge.index',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SingleAboutChallenge  $singleAboutChallenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(SingleAboutChallenge $model ,$id , CrudRepository $crud )
    {
        $crud->delete($id,$model);
        return redirect()->back();
    }
}
