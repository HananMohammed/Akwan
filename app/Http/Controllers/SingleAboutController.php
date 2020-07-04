<?php

namespace App\Http\Controllers;
use App\Http\Requests\AboutSingle;
use App\repository\CrudRepository;
use App\SingleAbout;
use Illuminate\Http\Request;

class SingleAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crud ,SingleAbout $model)
    {
        $data = $crud->getAllData($model);

        return view('dashboard.dashboardpages.single_about_skill.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardpages.single_about_skill.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud ,SingleAbout $model ,AboutSingle $req)
    {
//        dd('soijoieshoidchoiewhcoiheqwc');
//
          $crud->store($req ,$model);
        //$data= $crud->getAllData($model);
        return redirect()->route('dskills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SingleAbout  $singleAbout
     * @return \Illuminate\Http\Response
     */
    public function show(SingleAbout $singleAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SingleAbout  $singleAbout
     * @return \Illuminate\Http\Response
     */
    public function edit( CrudRepository $crud ,SingleAbout $model ,$id )
    {
         $data =$crud->getById($model,$id);
        return view('dashboard.dashboardpages.single_about_skill.update',compact('data'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SingleAbout  $singleAbout
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRepository $crud ,SingleAbout $model ,$id ,AboutSingle $req )
    {
          $crud->update($req,$id,$model);
          //$data=$crud->getAllData($model);
         // return view('dashboard.dashboardpages.single_about_skill.index' ,compact('data'));
        return redirect()->route('dskills.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SingleAbout  $singleAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy( CrudRepository $crud , SingleAbout $model ,$id )
    {
        $crud->delete($id ,$model);
        return redirect()->back();
    }
}
