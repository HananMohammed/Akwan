{{--<nav id="nav" class="navbar navbar-expand-sm text-body  fixed-top nav-fixed-top">--}}
{{--    <div class="container">--}}
{{--        <a id="lego" class="navbar-brand" href="{{URL::to('/')}}">--}}
{{--            <div  class="logo">--}}
{{--                <picture>--}}
{{--                    <source srcset="{{URL::asset('public/images/logo.webp')}}" type="image/webp">--}}
{{--                    <source srcset="{{URL::asset('public/images/logo.png')}}" type="image/png">--}}
{{--                    <img class="logo1 img-fluid" src="{{URL::asset('public/images/logo.png')}}" alt="Akwan logo">--}}
{{--                </picture>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler d-lg-none navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"--}}
{{--                aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="collapsibleNavId">--}}
{{--            <ul class="navbar-nav mt-2 ml-auto mt-lg-0 marginNav text-body text-uppercase">--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/')}}">{{trans('webnav.home')}} <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item  pr-2">--}}
{{--                    <a class="nav-link " href="{{URL::to('/about-us')}}">{{trans('webnav.about')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/all-products')}}">{{trans('webnav.services')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/#cars')}}">{{trans('webnav.offers')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/form')}}">{{trans('webnav.projects')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/single-features')}}">{{trans('webnav.blog')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/#contactUs')}}">{{trans('webnav.contact')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{route('lang',[trans('nav.langval')])}}">{{trans('nav.lang')}}</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}




{{--<div id="myNav" class="navOverlay">--}}

{{--    <!-- Button to close the overlay navigation -->--}}
{{--    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>--}}

{{--    <!-- Overlay content -->--}}
{{--    <div class="overlay-content text-muted">--}}
{{--        <a href="#">About</a>--}}
{{--        <a href="#">Services</a>--}}
{{--        <a href="#">Clients</a>--}}
{{--        <a href="#">Contact</a>--}}
{{--    </div>--}}
{{--    <ul class="text-body text-uppercase">--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/')}}">{{trans('webnav.home')}} <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item  pr-2">--}}
{{--                    <a class="nav-link " href="{{URL::to('/about-us')}}">{{trans('webnav.about')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/all-products')}}">{{trans('webnav.services')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/#cars')}}">{{trans('webnav.offers')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/form')}}">{{trans('webnav.projects')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/single-features')}}">{{trans('webnav.blog')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{URL::to('/#contactUs')}}">{{trans('webnav.contact')}}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item pr-2">--}}
{{--                    <a class="nav-link" href="{{route('lang',[trans('nav.langval')])}}">{{trans('nav.lang')}}</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--</div>--}}



{{--<!-- Use any element to open/show the overlay navigation menu -->--}}
{{--<span onclick="openNav()">open</span>--}}
{{--@php--}}
{{--$i=1;--}}
{{--@endphp--}}

<div class=" navData fixed-top mt-3 nav-fixed-top">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="navData-img">
                <a href="{{URL::to('/')}}" class="mb-0">
                    <picture>
                        <source srcset="{{URL::asset('public/images/logo.webp')}}" type="image/webp">
                        <source srcset="{{URL::asset('public/images/logo.png')}}" type="image/png">
                        <img class="logo1 img-fluid" src="{{URL::asset('public/images/logo.png')}}" alt="Akwan logo">
                    </picture>
                </a>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="languages px-4">
                    <a class="text-uppercase mainclr2" href="{{route('lang',[trans('nav.langval')])}}">{{trans('nav.langval')}}</a>
                </div>
                <div class="nav-toggle">
                    <a  class="navBtn">
                        <div class="navContent">
                            @for($i=1 ; $i<= 10 ; $i++)
                                <div class="dot bgclr2"></div>
                            @endfor
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="navContent-overlay d-flex justify-content-center align-items-center">
        <div class="text-center">
            <ul class="list-unstyled text-uppercase mb-5">
                <li class="px-2">
                    <a class="" href="{{URL::to('/')}}">{{trans('webnav.home')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="px-2">
                    <a class="" href="{{URL::to('/about-us')}}">{{trans('webnav.about')}}</a>
                </li>
                <li class="px-2">
                    <a class="" href="{{URL::to('/all-service')}}">{{trans('webnav.services')}}</a>
                </li>
{{--                <li class="px-2">--}}
{{--                    <a class="" href="{{URL::to('/#')}}">{{trans('webnav.offers')}}</a>--}}
{{--                </li>--}}
                <li class="px-2">
                    <a class="" href="{{URL::to('/all-projects')}}">{{trans('webnav.projects')}}</a>
                </li>
                <li class="px-2">
                    <a class="" href="{{URL::to('/all-blogs')}}">{{trans('webnav.blog')}}</a>
                </li>
                <li class="px-2">
                    <a class="" href="{{URL::to('/contact-us')}}">{{trans('webnav.contact')}}</a>
                </li>
            </ul>
            <ul class="list-unstyled nav-social  mt-5 text-center">

                @foreach($data['social'] as  $social)
                    <li class="mx-3"><a class="mainclr2" href="{{$social->link}}">{!! $social->socailIcon->icon !!}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>