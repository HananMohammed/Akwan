{{--@php--}}
{{--dd($data['SubService']);--}}
{{--@endphp--}}
@section('style')
    <style>
        #singleService h1 {font-weight: 800;}
        #singleService .service-slide-data
        {
            position: absolute;
            top: 10%;
            left: 0;
            right: 0;
            bottom: 10%;
            width: 80%;
            margin: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .service-types-img { border-radius: 50%; width: 90px; height: 90px;}
        .service-types-data{height: 100%;}
        .service-types-img img  {width: 70%;}
        /*.service-types .row .col-md-6:nth-child(2) .service-types-img {background-color: #161616 !important;}*/
        .service-types .row .col-md-6 .service-types-data{transition: all ease 0.5s; }
        .service-types .row .col-md-6:hover  .service-types-data {box-shadow: 6px 7px 18px rgba(0, 0, 0, 0.52); transform: scale(1.01)}
        .service-types-text p:first-child{font-weight: 700;font-size: 20px;}
        .service-types-text p:last-child {font-size: 14px;color: #4E4E4E;}
        .overlay1 , .overlay2 , .overlay3 {border-radius: 50%; display: flex; justify-content: center; align-items: center;z-index: 1;}
        .creative-services-number {position: relative;  z-index: 1;}
        .creative-services-number:after
        {
            content: '';
            position: absolute;
            top: 50%;
            right: -6%;
            left: -6%;
            height: 6px;
            background-color: #6E6E6E;
            z-index: 0;
        }
        .col-md-3:nth-child(1) .creative-services-number:after  {left: 50% ;}
        .col-md-3:nth-child(4) .creative-services-number:after  {right: 50% ;}
        .creative-services-number:after {}
        .creative-services-number .overlay1 { background-color: #A1A1A1; width: 130px; height: 130px;}
        .creative-services-number .overlay2 { background-color: #6E6E6E; width: 90px; height: 90px;}
        .creative-services-number .overlay3 { background-color: #000; width: 50px; height: 50px;}

        .creative-services-data {position: relative; z-index: 2}
        .boxx
        {
            position: absolute;
            left: 0;
            right: 0;
            top: -2%;
            background-color: #000;
            width: 50px;
            height: 50px;
            margin: auto;
            z-index: 1;
            transform: rotate(45deg);
            transition: all 0.3s ease 0.3s;

        }
        /*.creative-services .row .col-md-3:nth-child(1) .creative-services-data:before*/
        /*{*/

        /*}*/
        .creative-services .row .col-md-3 .creative-services-data {background-color: #F2F2F2;}
        .testclr1{background-color: #000 !important; color: #fff;}
        .testclr {background-color: #000 !important; color: #fff;}
        .creative-services .row .col-md-3 .creative-services-data {transition: all ease 0.5s; height: 50%;}
        .creative-services-data p {margin-bottom: 0;font-size: 14px;}
        .service-slider .carousel-overlay {  background-image: linear-gradient(to left, rgba(0, 0, 0, 0.49), transparent);}
        .service-slider .carousel-item img {height: 70vh;}
        .service-slider .carousel-control-prev ,  .service-slider .carousel-control-next  { width: 5%; height: 25%; top: 35%; background-color: #000;}
        .service-slider .carousel-caption {top: 35%;}
        .service-slider .carousel-caption h3 {font-weight: 800;}
        .read-img img  {width: 100px; height: 100px;}
        #singleService .owl-carousel .owl-nav {display: none !important;}
        .owl-controls .owl-nav button
        {
            border-radius: 0;
            background-color: #373737;
            color: #65CC2A;
            border: 0;
            width: 80px;
            height: 80px;
            margin: 0 5px;
            font-size: 30px;
        }

    </style>
@endsection
@php
    $title='title_'.trans('systems.lang');
    $description='des_'.trans('systems.lang');
    $route='s_'.trans('systems.lang');
    $name = 'name_'.trans('systems.lang');
    $text = 'text_'.trans('systems.lang');
    $slug= 'slug_'.trans('systems.lang');
@endphp
@include('homepage.inc.header')
<div id='logo2'>
@include('homepage.inc.nave')
</div>
{{--            @php--}}
{{--            dd($data['homeServices'][0])--}}
{{--            @endphp--}}

<div class="service-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @php
            $i=0;
           // dd($service)
            @endphp
{{--            @foreach($service as $services )--}}
            <div class="carousel-item @if ($i == 0) active @endif">
                <picture>
                    <source srcset="{{URL::asset('public/image').'/'.$service->images.'.webp'}}" type="image/webp">
                    <source srcset="{{URL::asset('public/image').'/'.$service->images}}" type="image/png">
                    <img src="{{URL::asset('public/image').'/'.$service->images}}" alt="service 1" class="img-fluid d-block w-100">
                </picture>
                <div class="carousel-overlay">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <div>
                            <h3 class="mainclr1 text-uppercase">{{trans('services.our-serv')}}</h3>
                            <h4 class="mb-2 text-white">{!! $service -> $name !!}</h4>
{{--                            <h4 class="text-white">{{trans('services.services')}}</h4>--}}
                        </div>
                    </div>
                </div>
            </div>
{{--                @php--}}
{{--                    $i++;--}}
{{--                @endphp--}}
{{--            @endforeach--}}
        </div>
{{--        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>--}}
    </div>
</div>
<!--start of service slug-->
<div class="service-slug my-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="slug-data">
                    {!! $service->$slug !!}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-sm-12">--}}
{{--                      {{dd($service)}}--}}
{{--                         --}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-sm-12">--}}
{{--                            <picture>--}}
{{--                                <source srcset="{{URL::asset('public/images/reponsive.webp')}}" type="image/webp">--}}
{{--                                <source srcset="{{URL::asset('public/images/reponsive.png')}}" type="image/png">--}}
{{--                                <img src="{{URL::asset('public/images/reponsive.png')}}" alt="slug image" class="img-fluid">--}}
{{--                            </picture>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--start of service types-->
<div class="service-types bgclr6 py-5">
    <div class="container">
        <div class="row justify-content-center">
{{--{{dd($data['SubService'])}}--}}
            @foreach($data['SubService'] as $service )
            <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-3">
                <div class="service-types-data bg-white p-3 ">
                    <div class="service-types-img bgclr6 mb-3 d-flex align-items-center justify-content-center mx-auto">
                        <picture>
                            <source srcset="{{URL::asset('public/image').'/'.$service->images.'.webp'}}" type="image/webp">
                            <source srcset="{{URL::asset('public/image').'/'.$service->images}}" type="image/png">
                            <img src="{{URL::asset('public/image').'/'.$service->images}}" alt="service 1" class="img-fluid">
                        </picture>
                    </div>
                    <div class="service-types-text">
                        <p class="mb-2">{!! $service -> $name !!}</p>
                        {!! $service  -> $text!!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!--start of creative service -->
<div class="creative-services py-2 bgclr6">
    <div class="container">
        <div class="row">

{{--            @php--}}
{{--            dd($data['creativeServices'][1])--}}
{{--            @endphp--}}
            <div class="col-sm-12 text-center">
                <div class="creative-services-title">
                    <h2 class="text-uppercase">{{trans('services.how')}}</h2>
                    <h3 class="mainclr1">{{trans('services.creative')}}</h3>
                </div>
            </div>
            <div class="col-sm-12 mt-5">
                <div class="row justify-content-between">
{{--                    {{dd($data['creativeServices'])}}--}}
                    @foreach($data['creativeServices'] as $creative)
                    <div class="col-md-3">
                        <div class=" creative-services-number d-flex justify-content-between mb-5 mt-sm-3">
                            <div class="overlay1 m-auto">
                                <div class="overlay2">
                                    <div class="overlay3 text-center">
                                        <h2 class="mainclr2 mb-0">{{$creative->id-1}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="creative-services-data py-5 px-1">
                            <div class="text-center ">
                               <h5>{{$creative -> $name}}</h5>
                                {!! $creative ->$text !!}
                            </div>
                            <div class="creative-services-box">

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--start of start section-->
@include('homepage.inc.start')
<div id="singleService" class="single-service bgclr3 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="owl-carousel owl-theme">
                    @foreach($data['homeServices'] as $service )
                        <div class="item">
                            <div class="service-img">
                                <picture>
                                    <source srcset="{{URL::asset('public/image').'/'.$service->images.'.webp'}}" type="image/webp">
                                    <source srcset="{{URL::asset('public/image').'/'.$service->images}}" type="image/png">
                                    <img src="{{URL::asset('public/image').'/'.$service->images}}" alt="service 1" class="img-fluid">
                                </picture>
                            </div>
                            <div class="service-slide-data text-center d-flex align-items-center justify-content-center">
                                <div class="text-white">
                                    <p class="mainclr2 text-white">{!! $service -> $name !!}</p>
                                    {!! $service  -> $text!!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-center mt-sm-3">
                <h2 class="mainclr2 text-uppercase">{{trans('services.check')}}</h2>
                <div class="owl-controls mt-4">
                    <div class="owl-nav d-flex justify-content-center">
                        <button class="owl-prev"><</button>
                        <button class="owl-next">></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@include('homepage.map')
@include('homepage.inc.footr')
<!--end of products-->
