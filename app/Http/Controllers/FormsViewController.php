<?php
namespace App\Http\Controllers;
use App\FormCompanies;
use App\FormIndividuals;
use App\FormGovernment;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class FormsViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud ,FormIndividuals $individualsModel)
    {
        $individual_data=$crud->getAllData($individualsModel);


        return view('dashboard.dashboardpages.forms.form',compact('individual_data' ,'company_data','gov_data' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('dashboard.dashboardpages.forms.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( )
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormGovernment  $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function show(CrudRepository $crud ,$id,FormIndividuals $individualsModel)
    {
        $individual_data=$crud->getById($individualsModel,$id);


        return view('dashboard.dashboardpages.forms.details' ,compact('individual_data' ,'company_data','gov_data' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormGovernment  $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function edit(FormGovernment $formGovernment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormGovernment  $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormGovernment $formGovernment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormGovernment  $formGovernment
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormGovernment $formGovernment)
    {
        //
    }


}
