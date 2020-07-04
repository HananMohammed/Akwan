@section('style')
    <style>
        #projectsTitle {padding: 10% 0 5% }
        #projectsTitle h2 {font-weight: 800;}
        .projects-data-select ul li {display: inline; padding: 0 5px 0; }
        .projects-data-select ul li a {color: #707070; font-weight: 300;}
        .projects-data-img img {height: 328px; width: 100%}
      /*  .social-data , .latest {transition: all ease 0.5s}*/
        .pagination-row
        {
            justify-content: center;
            align-items: center;
            display: flex;
        }
        ul.pagination {margin-bottom: 0;}
        ul.pagination li {display: none;}
        ul.pagination li:first-child  ,  ul.pagination li:last-child{display: flex; }
        ul.pagination li:first-child a ,  ul.pagination li:last-child a , ul.pagination li a:focus
        {border-radius: 0; background-color: #373737;color: #65CC2A;  border: 0;}
        .page-item:last-child .page-link , .page-item:first-child .page-link
        {
            border-radius: 0rem;
            /*padding: 10px 20px;*/
            width: 90px;
            height: 90px;
            font-size: 50px;
            font-weight: 300;
            margin:  0 10px;
                display: flex;
    justify-content: center;
    align-items: center;
        }
           .projects-data-select li a {transition : all ease 0.9s;}
          .projects-data-select li:hover a{   color : #0DA226; font-weight:bolder;}
        .projects-data-select li a.active{   color : #0DA226; font-weight:bolder;}



    </style>

@endsection

@include('homepage.inc.header')
<div id='logo2'>@include('homepage.inc.nave')</div>


<div id="projectsTitle" class="bgclr3  text-center mainclr1">
    <h2 >{{trans('project.projects')}}</h2>
</div>


@php
    $proj_name = 'proj_name_en';
    $name='category_name_'.trans('systems.lang');
    $name_pro='name_'.trans('systems.lang')
     // dd($data['blog_Category'])
@endphp
{{--{{ dd(Request::segment(2)) }}--}}
<div id="projectsData" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="projects-data-select py-2 mb-3">
                    <ul class="list-unstyled  d-none d-md-block">
                        <li><a href="{{URL::to('/all-projects')}}" class="latestBtn @if(!Request::segment(2))active @endif" disabled>{{trans('project.latest')}}</a></li>

                        @foreach($data['projectCats'] as $cat)

                        <li><a href="{{URL::to('all-projects').'/'.$cat->id}}" class="catBtn @if($cat->id==Request::segment(2))active @endif ">{{$cat->$name_pro}}</a></li>
                        @endforeach
                       {{-- <li><a href="all-projects/{{$allprojects[0] -> category_id}}" class="socialBtn">{{trans('project.social')}}</a></li>--}}
                       {{-- <li><a href="all-projects/{{$allprojects[1] -> category_id}}">{{trans('project.web')}}</a></li>--}}
                      {{--  <li><a href="all-projects/{{$allprojects[2] -> category_id}}">{{trans('project.mobil')}}</a></li>--}}
                      {{--  <li><a href="#">{{trans('project.videos')}}</a></li>--}}
                      {{--  <li><a href="#">{{trans('project.Identity')}}</a></li>--}}
                    </ul>


                    <div class="btn-group d-sm-block  d-md-none">
                          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('project.selectCat')}}
                          </button>
                          <div class="dropdown-menu">
                              @foreach($data['projectCats']  as $cat)
                                <li><a href="{{URL::to('all-projects').'/'.$cat->id}}" class="catBtn dropdown-item">{{$cat->$name_pro}}</a></li>
                            @endforeach
                      </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-12">
                <div class="projects-data-img">
                    <div class="row justify-content-center">
                        @foreach($allprojects as $allproject)
                            <div class="col-lg-4 col-md-6 col-sm-12 social-data mb-3">
                                {{--                                        //   {{dd(json_decode($webImages->images)[0])}}--}}
                                <picture>
                                    <source srcset="{{URL::asset('public/image').'/'.json_decode($allproject->images)[0].'.webp'}}" type="image/webp">
                                    <source srcset="{{URL::asset('public/image').'/'.json_decode($allproject->images)[0]}}" type="image/jpg">
                                    <img src="{{URL::asset('public/image').'/'.json_decode($allproject->images)[0]}}" alt="{{$allproject ->  $proj_name}} " class="img-fluid">
                                </picture>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center pagination-row mt-5">
                    {{$allprojects->links()}}
                </div>
            </div>
        </div>
    </div>
</div>


@include('homepage.map')
@include('homepage.inc.footr')
