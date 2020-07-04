<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlidersUpdate;
use App\repository\CrudRepository;
use App\repository\SliderRepositry;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\Sliders;

class SliderController extends Controller
{
    private $sliderrepo;
    /**
     * SliderController constructor.
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crudRepository,Slider $slider)
    {
        if(count( $crudRepository->getAllData($slider))>0){
            $slides = $crudRepository->getById($slider,1);

            return view('dashboard.dashboardpages.homesliders.slideredit', compact('slides'));
        }else{


            return view('dashboard.dashboardpages.homesliders.slider');

        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.dashboardpages.homesliders.shomesliderform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  SliderRepositry $SliderRepositry
     * @return \Illuminate\Http\Response
     */
    public function store(Sliders $request,CrudRepository $crudRepository,Slider $slidermodel)
    {
        //
        //dd($request);
        //dd($slide=$SliderRepositry->createSlider($request));
        $crudRepository->store($request,$slidermodel);

        return redirect()->route('dslider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit( ){
//    {//Sliders $request,,Slider $slider
//        // $crudRepository->update($request ,$slider);
//        $slider=$crudRepository->getById($modelname,$id);
//        //$slider= $crudRepository->update( $request ,$slider ,$id);
//        return view('dashboard.dashboardpages.homesliders.slideredit',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     * ,
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update( CrudRepository $crudRepository , Slider $slider ,SlidersUpdate $request ,$id)
    {
        //
        $crudRepository->update( $request,$id,$slider);
        // $updateslide=$this->sliderrepo->updateSlider($request,$id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy( CrudRepository $crudRepository , Slider $slider ,$id)
    {
        //
        $crudRepository->delete($id,$slider);
        // $this->sliderrepo->destroy($id);
        return redirect()->back();
    }
}
