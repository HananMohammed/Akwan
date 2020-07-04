@section('style')
    <style>
        .all-service-header h3 {font-weight: 800;}
        .all-service-data card {position: relative; border-radius: 0; height: 100%}
        .card-img-top , .card{border-radius: 0;}
        .all-service-data .row .card {overflow: hidden;}
        .all-service-img img {height: 400px;}
        .card-body-overlay
        {
            position: absolute;
            left: 0%;
            right: 0%;
            top: 0%;
            bottom: 10%;
            width: 80%;
            margin: auto;
            background-color: rgba(239, 239, 239, 0.55);
            transition: all ease 0.8s;
            opacity: 0;
            transform: scale(0,0);
        }
        .all-service-data .card:hover   .card-body-overlay
        {
            top: 10%;
            opacity: 1;
            transform: scale(1 , 1);
        }
        .card-body-overlay h3 {opacity: 0; transition: all 0.3s ease 0.3s;color: #000;  }
        .card-body-overlay p{opacity: 0; transition: all 0.5s ease 0.5s; color: #161616}
        .card-body-overlay a {opacity: 0; transition: all 0.7s ease 0.7s; color: #000; font-weight: 800; }
        .all-service-data .card:hover   .card-body-overlay h3 , .all-service-data .card:hover   .card-body-overlay p ,
        .all-service-data .card:hover   .card-body-overlay a {opacity: 1;}
        .pagination-row
        {
            justify-content: center;
            align-items: center;
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
            font-size: 55px;
            font-weight: 300;
            margin:  0 10px;
        }
    </style>
@endsection
@php
    $title='title_'.trans('systems.lang');
    $description='des_'.trans('systems.lang');
    $route='s_'.trans('systems.lang');
    $name = 'name_'.trans('systems.lang');
    $text = 'text_'.trans('systems.lang');
    //$slug= 'slug_'.trans('systems.lang');
$slug='sluginput_'.trans('systems.lang');
@endphp

@include('homepage.inc.header')
<div id='logo2'>
    @include('homepage.inc.nave')
</div>

<div class="all-service-header bgclr3 text-center pt-4">
    <h3 class=" mainclr2 text-uppercase py-5 mb-0">{{trans('services.services')}}</h3>
</div>


<div class="all-service-data my-5">
    <div class="container my-2">
        <div class="row justify-content-center">
{{--            @php--}}
{{--                dd(json_decode($data['homeServices']))--}}
{{--            @endphp--}}
            @foreach($data['homeServices'] as $service )
            <div class="col-lg-4 col-md-6 col-sm-12 mb-2 ">
                <a class="mt-3" target="_blank" href="{{URL::to('/single-service/'.$service->id).'-'.$service->$slug}}">
                    <div class="card border-0" style="width: 100%;">
                        <div class="all-service-img">
                            <picture>
                                <source srcset="{{URL::asset('public/image').'/'.$service->images.'.webp'}}" type="image/webp">
                                <source srcset="{{URL::asset('public/image').'/'.$service->images}}" type="image/png">
                                <img src="{{URL::asset('public/image').'/'.$service->images}}" alt="service 1" class="img-fluid card-img-top">
                            </picture>
                        </div>

                        <a class="mt-3" target="_blank" href="{{URL::to('/single-service/'.$service->id).'-'.$service->$slug}}">
                             <div class="card-body-overlay text-center px-3 d-flex justify-content-center align-items-center">
                            <div class="div">
                               <h3 class="mb-3">{!! $service -> $name !!}</h3>
                                {!! $service  -> $text!!}
                                @php

                                //$slug=str_replace(" ", "-", $service -> $name);
                               // $slug=str_replace("/", "-", $slug);
                                $slug='sluginput_'.trans('systems.lang');
                                //dd($slug)
                                @endphp
                                <a class="mt-3" target="_blank" href="{{URL::to('/single-service/'.$service->id).'-'.$service->$slug}}">{{trans('services.click')}}</a>
                            </div>
                        </div>
                        </a>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="row col-12 text-center pagination-row mt-5">
                {{ $data['homeServices']->links() }}
            </div>
        </div>
    </div>
</div>

@include('homepage.inc.start')
@include('homepage.map')
@include('homepage.inc.footr')