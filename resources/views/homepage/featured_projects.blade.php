

@php
    //dd(json_decode($data['projectAkwan'][0]->images)[0])
//$i=0;
//dd($data['projectAkwan'])
@endphp
<div id="featuredProjects" class="featured-projects bgclr3 py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between text-white mb-4">
            <div class="featured-projects-title">
                <p class="mb-0">{{trans('features.featured')}} <span class="mainclr2">{{trans('features.projects')}}</span></p>
            </div>
            <div class="featured-projects-btn d-flex align-items-center justify-content-end  pr-3">
                <a href="all-projects/" class="btn text-white">{{trans('features.view')}}</a>
                <i class="{{trans('css.icon')}}"></i>
            </div>
        </div>
        <div class="owl-carousel owl-theme">

            @foreach($data['projectAkwan'] as $project)
                @php

                @endphp
                <a href="{{URL::to('/all-projects')}}" >
                    <div class="item">
                        <picture>
                            <source srcset="{{URL::asset('public/image').'/'.json_decode($project->images)[0].'.webp'}}" type="image/webp">
                            <source srcset="{{URL::asset('public/image').'/'.json_decode($project->images)[0]}}" type="image/webp">
                            <img src="{{URL::asset('public/image').'/'.json_decode($project->images)[0]}}" alt="project" class="img-fluid">
                        </picture>
{{--                        <picture>--}}
{{--                            <source srcset="{{URL::asset('public/image/'.json_decode($project->images)[0]).'.webp'}}" type="media/webp">--}}
{{--                            <source srcset="{{URL::asset('public/image/'.json_decode($project->images)[0])}}" type="media/jpeg">--}}
{{--                            <img src="{{URL::asset('public/image/'.json_decode($project->images)[0])}}" alt="project">--}}
{{--                        </picture>--}}
                    </div>
                </a>
            @endforeach
        </div>
        <div class="col-12 text-center mt-5 d-flex align-items-center justify-content-center features-pagination">
            <p class="text-white d-inline mr-2 mb-0"> <span id="changeNumber"></span> / <span id="sliderNumber">{{COUNT($data['projectAkwan'])}}</span></p>
            <input type="range"  value="0" min="0" max="{{ceil(COUNT($data['projectAkwan'])/2 )}}"  name="discount_credits1" id="discount_credits"/>
        </div>

    </div>
</div>
