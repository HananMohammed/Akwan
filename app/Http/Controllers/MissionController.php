<?php

namespace App\Http\Controllers;
use App\repository\CrudRepository;
use App\Mission;
use App\repository\Missionrepositry;
 use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*public function __construct()
    {
        $this->Missrepo=new Missionrepositry();
    }*/
    /*
    public function index()
    {
        //
        $mission=new Missionrepositry();

        if(count($mission->MissionData([0]))>0){
            $missionarray=$mission->MissionData([0])[0];
            // dd($aboutarray);
            return view('dashboard.dashboardpages.mission.missionedit',compact('missionarray'));
        }else{
            return view('dashboard.dashboardpages.mission.mission');
        };
    }
*/
    public function index( CrudRepository $crud,Mission $mission  ){
                if(count($crud->getAllData($mission))>0){
                             $missionarray=  $crud->getById($mission,1);
                      return view('dashboard.dashboardpages.mission.missionedit' ,compact('missionarray'));

        }
        else{
            return view('dashboard.dashboardpages.mission.mission');

        }


    }




   /* public function index( CrudRepository $crudRepository,Mission $mission ,Missionrepositry $missionrepositry )
    {
        $mission_repo = $crudRepository->getAllData($mission);



    }

*/
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
     * @param  \App\Http\Requests\Mission $request
     * @param Missionrepositry $missionrepositry
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Mission $request,CrudRepository $crud,Mission $mission  )
    {
         $crud->store($request,$mission);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Mission $request
     * @param Missionrepositry $missionrepositry
     * @param  \App\Mission  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Mission $request, CrudRepository $crud,Mission $mission, $id)
    {
        //
            $crud->update($request,$id,$mission);
         return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }
}
