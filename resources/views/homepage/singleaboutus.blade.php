@php
    $skills='text_'.trans('systems.lang');
    $name='name_'.trans('systems.lang');
    $challenge_name = 'name_'.trans('systems.lang');
    $challenge_text='text_'.trans('systems.lang');

@endphp

@section('style')
    <style>
        .navbar {background-color: transparent; transition: all 0.3s ease-in;}
        .navbar .nav-item a {color:#fff;}
        nav.scrolled {background-color: #fff;}
        nav.scrolled .nav-item a {color:#000;}
        body {background-color: #F3F3F3;}
        /*single about us page*/

        .aboutUs-header {height: 100vh; position: relative; padding: 10% 0;}
        /*.aboutUs-overlay*/
        /*{*/
        /*    position:absolute;*/
        /*    top: 50%;*/
        /*    left: 50%;*/
        /*    transform: translate(-50%,-50%);*/
        /*}*/
        .aboutUs-overlay
        {
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.6));
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        .aboutUs-header-text h2{font-size: 3.5rem;}
        .aboutUs-header-text h3{ font-family: 'Playfair Display', serif; font-size: 3rem;}
        /*.challenges-img img {height: 100%;}*/
        /*.skills-img img {width: 80%;}*/
        .progress {height: 9px; border-radius: 0;}
        .progress-data span {font-size: 16px;}
        .skills .container {width: 80%;}


    </style>
@endsection
@include('homepage.inc.header')
<div id='logo2'>

@include('homepage.inc.nave')

</div>

{{--<div  id='singleAboutUs'class="single-AboutUs">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-12">--}}
{{--                <div class="subject-data">--}}
{{--                    <div class="subject-img">--}}
{{--                        <picture>--}}
{{--                            <source srcset="{{URL::asset('public/images/aboutus/ac-bg.png')}}" type="image/webp">--}}
{{--                            <source srcset="{{URL::asset('public/images/aboutus/ac-bg.png')}}" type="image/png">--}}
{{--                            <img src="{{URL::asset('public/images/aboutus/ac-bg.png')}}" alt="car" class="img-fluid">--}}
{{--                        </picture>--}}
{{--                    </div>--}}
{{--                    <div class="contact-subject-overlay py-5 text-uppercase">--}}
{{--                        <h2>{{trans('about.about')}}</h2>--}}
{{--                        <h4>{{trans('about.attractive')}}</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-12">--}}
{{--                <div>--}}
{{--                    <p>{!!$data['about']->$about!!}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



<div class="aboutUs-header" style="background-image: url({{URL::asset('public/images/slider.jpg')}}); background-size: cover;">
    <div class="aboutUs-overlay d-flex justify-content-center align-items-center">
        <div class="aboutUs-header-text text-center mb-3">
            <h2 class="text-uppercase text-white">{{trans('about.about')}}</h2>
            <h3 class="mainclr2">{{trans('about.who')}}</h3>
        </div>
    </div>
</div>
<!--fixed 6 about us-->
@include('homepage.aboutus')
<!--who-->
<div class="who">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-6 bgclr3 text-white">
                <div class="who-data py-2 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60.5" height="73.103" viewBox="0 0 60.5 73.103">
                        <g id="award" transform="translate(-39.995)">
                            <g id="Group_42" data-name="Group 42" transform="translate(39.995)">
                                <g id="Group_41" data-name="Group 41" transform="translate(0)">
                                    <path id="Path_44" data-name="Path 44" d="M100.23,63.507l-7.669-9.86a11.1,11.1,0,0,0,6.068-4.492c1.806-3.122.989-6.932.2-10.612a28.986,28.986,0,0,1-.853-5.773,28.977,28.977,0,0,1,.853-5.778c.785-3.683,1.607-7.49-.2-10.607-1.87-3.232-5.636-4.428-9.279-5.582A26.992,26.992,0,0,1,84.11,8.751a25.606,25.606,0,0,1-4.2-3.4C77.209,2.84,74.145,0,70.245,0s-6.964,2.84-9.667,5.347a25.611,25.611,0,0,1-4.2,3.4A26.985,26.985,0,0,1,51.143,10.8c-3.643,1.155-7.409,2.351-9.279,5.582-1.806,3.122-.989,6.932-.2,10.612a28.977,28.977,0,0,1,.852,5.778,28.977,28.977,0,0,1-.853,5.778c-.785,3.683-1.607,7.49.2,10.607a11.1,11.1,0,0,0,6.074,4.491l-7.676,9.86a1.26,1.26,0,0,0,1.152,2.024L50.424,64.4l2.225,7.784a1.26,1.26,0,0,0,.972.891,1.286,1.286,0,0,0,.239.023,1.26,1.26,0,0,0,1-.487L62.9,62.263a11.655,11.655,0,0,0,7.341,3.277,11.655,11.655,0,0,0,7.34-3.277l8.049,10.349a1.26,1.26,0,0,0,1,.49,1.286,1.286,0,0,0,.239-.023,1.26,1.26,0,0,0,.972-.891l2.225-7.783,9.012,1.126a1.26,1.26,0,0,0,1.152-2.024Zm-45.84,5.6-1.839-6.436a1.26,1.26,0,0,0-1.368-.9l-7.058.882,6.326-8.132.7.223a26.984,26.984,0,0,1,5.233,2.047,25.605,25.605,0,0,1,4.2,3.4l.434.4Zm15.856-6.089c-2.911,0-5.36-2.269-7.954-4.674a27.783,27.783,0,0,0-4.65-3.74A29.224,29.224,0,0,0,51.9,52.338c-3.331-1.057-6.478-2.056-7.86-4.443-1.318-2.28-.638-5.457.084-8.823a30.865,30.865,0,0,0,.91-6.3,30.853,30.853,0,0,0-.909-6.3c-.722-3.364-1.4-6.541-.084-8.823,1.386-2.387,4.529-3.385,7.86-4.443a29.232,29.232,0,0,0,5.737-2.269,27.781,27.781,0,0,0,4.648-3.74c2.6-2.4,5.044-4.674,7.956-4.674s5.36,2.269,7.954,4.674a27.782,27.782,0,0,0,4.65,3.74A29.224,29.224,0,0,0,88.588,13.2c3.331,1.057,6.478,2.056,7.86,4.443,1.318,2.28.638,5.457-.084,8.823a30.865,30.865,0,0,0-.91,6.3,30.852,30.852,0,0,0,.909,6.3c.722,3.364,1.4,6.541.084,8.823-1.386,2.387-4.529,3.385-7.86,4.443a29.233,29.233,0,0,0-5.737,2.269,27.782,27.782,0,0,0-4.648,3.74C75.606,60.751,73.157,63.019,70.245,63.019Zm19.068-1.25a1.26,1.26,0,0,0-1.368.9L86.1,69.108l-6.622-8.514.434-.4a25.612,25.612,0,0,1,4.2-3.4,26.986,26.986,0,0,1,5.238-2.047l.7-.223,6.327,8.132Z" transform="translate(-39.995)" fill="#65cc2a"/>
                                </g>
                            </g>
                            <g id="Group_44" data-name="Group 44" transform="translate(47.558 10.083)">
                                <g id="Group_43" data-name="Group 43" transform="translate(0)">
                                    <path id="Path_45" data-name="Path 45" d="M110.687,64a22.687,22.687,0,1,0,22.687,22.687A22.687,22.687,0,0,0,110.687,64Zm0,42.853a20.166,20.166,0,1,1,20.166-20.166A20.166,20.166,0,0,1,110.687,106.853Z" transform="translate(-88 -64)" fill="#65cc2a"/>
                                </g>
                            </g>
                            <g id="Group_46" data-name="Group 46" transform="translate(55.218 17.39)">
                                <g id="Group_45" data-name="Group 45" transform="translate(0)">
                                    <path id="Path_46" data-name="Path 46" d="M166.186,120.492a2.52,2.52,0,0,0-2.037-1.037h-7.716l-2.395-7.344a2.521,2.521,0,0,0-4.789,0l-2.388,7.344h-7.722a2.521,2.521,0,0,0-1.485,4.559l6.246,4.537-2.386,7.344a2.521,2.521,0,0,0,3.879,2.818l6.25-4.536,6.248,4.537a2.521,2.521,0,0,0,3.879-2.818l-2.386-7.346,6.246-4.537A2.521,2.521,0,0,0,166.186,120.492Zm-9.024,6.559a1.261,1.261,0,0,0-.458,1.41l2.669,8.215-6.989-5.077a1.26,1.26,0,0,0-1.481,0l-6.989,5.077,2.668-8.215a1.26,1.26,0,0,0-.458-1.409l-6.988-5.077h8.637a1.26,1.26,0,0,0,1.2-.871l2.67-8.215,2.669,8.214a1.26,1.26,0,0,0,1.2.871h8.637Z" transform="translate(-136.616 -110.376)" fill="#65cc2a"/>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <p class="mt-2">{{trans('about.pro')}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 bgclr4 text-white">
                <div class="who-data py-2 mt-4">
                    <svg id="puzzle" xmlns="http://www.w3.org/2000/svg" width="74.325" height="74.324" viewBox="0 0 74.325 74.324">
                        <g id="Group_56" data-name="Group 56" transform="translate(12.387 12.387)">
                            <g id="Group_55" data-name="Group 55">
                                <path id="Path_60" data-name="Path 60" d="M140.7,80h-29.73a1.239,1.239,0,0,0-1.239,1.239V92.387a1.239,1.239,0,0,0,1.63,1.174l1.557-.519a3.221,3.221,0,1,1,0,6.122l-1.557-.519a1.239,1.239,0,0,0-1.63,1.174v9.91H99.82a1.239,1.239,0,0,0-1.174,1.63l.519,1.557a3.221,3.221,0,1,1-6.122,0l.519-1.557a1.239,1.239,0,0,0-1.174-1.63H81.239A1.239,1.239,0,0,0,80,110.968V140.7a1.239,1.239,0,0,0,1.239,1.239H140.7a1.239,1.239,0,0,0,1.239-1.239V81.239A1.239,1.239,0,0,0,140.7,80Zm-30.905,49.159a1.24,1.24,0,0,0-.063.391v9.91H82.477V112.207h8.192a5.7,5.7,0,1,0,10.869,0h8.192v9.91a1.239,1.239,0,0,0,1.63,1.174l1.557-.519a3.221,3.221,0,1,1,0,6.122l-1.557-.519A1.239,1.239,0,0,0,109.793,129.159Zm29.666,10.3H112.207v-8.192a5.7,5.7,0,1,0,0-10.869v-8.192h9.91a1.239,1.239,0,0,0,1.174-1.63l-.519-1.557a3.221,3.221,0,1,1,6.122,0l-.519,1.557a1.239,1.239,0,0,0,1.174,1.63h9.91V139.46Zm0-29.73h-8.192a5.7,5.7,0,1,0-10.869,0h-8.192v-8.192a5.71,5.71,0,1,0,0-10.869V82.477H139.46Z" transform="translate(-80 -80)" fill="#65cc2a"/>
                            </g>
                        </g>
                        <g id="Group_58" data-name="Group 58">
                            <g id="Group_57" data-name="Group 57">
                                <path id="Path_61" data-name="Path 61" d="M35.635,10.669a5.7,5.7,0,0,0-3.428,0V1.239A1.239,1.239,0,0,0,30.969,0H1.239A1.239,1.239,0,0,0,0,1.239v29.73a1.239,1.239,0,0,0,1.239,1.239h9.431a5.7,5.7,0,1,0,10.869,0h9.431a1.239,1.239,0,0,0,1.239-1.239V21.538a5.7,5.7,0,0,0,3.428-10.869Zm-.714,8.5a3.221,3.221,0,0,1-2,0l-1.557-.519a1.239,1.239,0,0,0-1.63,1.174v9.91H19.82a1.239,1.239,0,0,0-1.174,1.63l.519,1.557a3.221,3.221,0,1,1-6.122,0l.519-1.557a1.239,1.239,0,0,0-1.174-1.63H2.477V2.477H29.73v9.91a1.239,1.239,0,0,0,1.63,1.174l1.557-.519a3.221,3.221,0,0,1,2,6.122Z" fill="#65cc2a"/>
                            </g>
                        </g>
                    </svg>

                    <p class="mt-2">{{trans('about.strategic')}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 bgclr5">
                <div class="who-data py-2 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="75.885" height="60.901" viewBox="0 0 75.885 60.901">
                        <path id="Path_84" data-name="Path 84" d="M75.45,17.2,58.684.433A1.481,1.481,0,0,0,56.62.4c-1.3,1.227-7.422,6.99-7.511,7.077l-.016.015a6.213,6.213,0,0,1-4.628,2.1,11.761,11.761,0,0,0-8.6,3.167A11.037,11.037,0,0,0,28.931,9.77L21.522,2.36a1.482,1.482,0,0,0-2.1,0L.434,21.352A1.479,1.479,0,0,0,.4,23.412c.012.012.021.024.033.036L12.809,35.8l-.523.523a5.183,5.183,0,0,0,3.722,8.85,5.181,5.181,0,0,0,5.24,5.242,5.178,5.178,0,0,0,5.24,5.238,5.187,5.187,0,0,0,8.854,3.726l.525-.525.525.525a5.187,5.187,0,0,0,8.855-3.723,5.179,5.179,0,0,0,5.237-5.239,5.185,5.185,0,0,0,5.242-5.244,5.183,5.183,0,0,0,3.722-8.85l-.523-.523C69.259,25.482,56.186,38.565,75.45,19.3a1.482,1.482,0,0,0,0-2.1ZM3.578,22.4l16.9-16.9L26.168,11.2,9.275,28.093Zm10.8,19.167a2.222,2.222,0,0,1,0-3.144l5.241-5.241a2.223,2.223,0,0,1,3.144,3.145l-5.239,5.239a2.229,2.229,0,0,1-3.145,0Zm5.241,5.241a2.222,2.222,0,0,1,0-3.145l5.24-5.24a2.223,2.223,0,1,1,3.145,3.143h0l-5.24,5.24a2.226,2.226,0,0,1-3.144,0Zm5.24,5.239a2.222,2.222,0,0,1,0-3.143L30.1,43.662a2.223,2.223,0,0,1,3.144,3.144h0l-5.238,5.238a2.228,2.228,0,0,1-3.145,0ZM30.1,57.288a2.222,2.222,0,0,1,0-3.145l5.24-5.24a2.223,2.223,0,0,1,3.144,3.144l-5.24,5.241a2.227,2.227,0,0,1-3.144,0Zm11.528,0a2.225,2.225,0,0,1-3.143,0l-.525-.525,2.62-2.62a5.355,5.355,0,0,0,.485-.563l.562.562h0a2.221,2.221,0,0,1,0,3.144ZM57.352,41.566a2.228,2.228,0,0,1-3.145,0l-6.812-6.811a1.482,1.482,0,0,0-2.1,2.1l6.813,6.813a2.223,2.223,0,0,1-3.144,3.144l-6.812-6.814a1.482,1.482,0,0,0-2.1,2.1L46.871,48.9A2.223,2.223,0,0,1,45.3,52.7c-1.409,0-1.862-1.109-3.2-2.277a5.185,5.185,0,0,0-5.239-5.132,5.181,5.181,0,0,0-5.241-5.237,5.181,5.181,0,0,0-5.24-5.242,5.187,5.187,0,0,0-8.855-3.722l-2.622,2.622-3.532-3.521L28.817,12.74a8,8,0,0,1,4.948,2.107l-4.188,4.187a5.929,5.929,0,1,0,8.385,8.384l4.193-4.192,15.2,15.2a2.225,2.225,0,0,1,0,3.143Zm-.523-7.858L44.251,21.13,45.3,20.082a1.482,1.482,0,0,0-2.1-2.1l-7.337,7.337a2.965,2.965,0,0,1-4.193-4.193L37.709,15.1a8.83,8.83,0,0,1,6.756-2.542,8.7,8.7,0,0,0,5.6-1.964L64.826,25.732l-8,7.976ZM66.922,23.635,52.255,8.587l5.351-5.041,14.7,14.7Zm0,0" transform="translate(0.001 0.001)" fill="#161616"/>
                    </svg>

                    <p class="mt-2">{{trans('about.Flexibility')}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 bgclr3 text-white">
                <div class="who-data py-2 mt-4">
                    <svg id="businessman" xmlns="http://www.w3.org/2000/svg" width="73" height="73" viewBox="0 0 73 73">
                        <g id="Group_48" data-name="Group 48" transform="translate(42.583 19.467)">
                            <g id="Group_47" data-name="Group 47">
                                <path id="Path_47" data-name="Path 47" d="M283.65,128a3.65,3.65,0,0,0-3.65,3.65v1.217h2.433V131.65a1.217,1.217,0,0,1,2.433,0v1.217H287.3V131.65A3.65,3.65,0,0,0,283.65,128Z" transform="translate(-280 -128)" fill="#65cc2a"/>
                            </g>
                        </g>
                        <g id="Group_50" data-name="Group 50" transform="translate(54.75 19.467)">
                            <g id="Group_49" data-name="Group 49">
                                <path id="Path_48" data-name="Path 48" d="M363.65,128a3.65,3.65,0,0,0-3.65,3.65v1.217h2.433V131.65a1.217,1.217,0,0,1,2.433,0v1.217H367.3V131.65A3.65,3.65,0,0,0,363.65,128Z" transform="translate(-360 -128)" fill="#65cc2a"/>
                            </g>
                        </g>
                        <g id="Group_52" data-name="Group 52" transform="translate(47.45 27.983)">
                            <g id="Group_51" data-name="Group 51">
                                <path id="Path_49" data-name="Path 49" d="M319.3,184v1.217a2.433,2.433,0,1,1-4.867,0V184H312v1.217a4.867,4.867,0,1,0,9.733,0V184Z" transform="translate(-312 -184)" fill="#65cc2a"/>
                            </g>
                        </g>
                        <g id="Group_54" data-name="Group 54">
                            <g id="Group_53" data-name="Group 53">
                                <path id="Path_50" data-name="Path 50" d="M64.483,38.933H58.4V37.595a14.486,14.486,0,0,0,8.309-10.828h1.425a3.65,3.65,0,1,0,0-7.3H66.917V0H48.667a10.962,10.962,0,0,0-10.95,10.95v8.517H36.5a3.65,3.65,0,0,0,0,7.3h1.425a14.486,14.486,0,0,0,8.309,10.828v1.338H40.15a8.526,8.526,0,0,0-8.517,8.517v1.217h-7.3V47.45a3.65,3.65,0,0,0-3.65-3.65H15.817a3.65,3.65,0,0,0-3.65,3.65v1.217H1.217A1.217,1.217,0,0,0,0,49.883v21.9A1.217,1.217,0,0,0,1.217,73H71.783A1.217,1.217,0,0,0,73,71.783V47.45A8.526,8.526,0,0,0,64.483,38.933ZM66.917,21.9h1.217a1.217,1.217,0,1,1,0,2.433H66.917Zm-29.2,2.433H36.5a1.217,1.217,0,1,1,0-2.433h1.217ZM62.05,41.367l-5,6.665-.225-.225-2.79-2.79,3.65-3.65Zm-7.8,7.3L53.03,49.883H51.6l-1.217-1.217,1.93-1.93Zm-3.859-7.3h3.859l-1.93,1.93ZM40.15,10.95a8.526,8.526,0,0,1,8.517-8.517H64.483v7.3H53.533V10.95a3.65,3.65,0,0,1-3.65,3.65H40.15Zm0,13.383v-7.3h9.733a6.093,6.093,0,0,0,5.962-4.867h8.638V24.333A12.1,12.1,0,0,1,56.74,35.658a1.217,1.217,0,0,0-.774,1.133v2.143h-7.3V36.791a1.217,1.217,0,0,0-.774-1.133A12.1,12.1,0,0,1,40.15,24.333Zm6.8,17.033,3.65,3.65-2.79,2.79-.225.225-5-6.665ZM14.6,47.45a1.217,1.217,0,0,1,1.217-1.217h4.867A1.217,1.217,0,0,1,21.9,47.45v1.217H14.6ZM34.067,70.567H2.433V62.05H14.6V65.7a1.217,1.217,0,0,0,1.217,1.217h4.867A1.217,1.217,0,0,0,21.9,65.7V62.05H34.067ZM17.033,64.483V62.05h2.433v2.433Zm17.033-4.867H2.433V51.1H34.067ZM36.5,70.567V49.883a1.217,1.217,0,0,0-1.217-1.217H34.067V47.45a6.071,6.071,0,0,1,5.518-6.026l6.892,9.189a1.217,1.217,0,0,0,.887.487h.086a1.217,1.217,0,0,0,.86-.356l.356-.356,1.13,1.13L47.467,65.5a1.216,1.216,0,0,0,.226.931l3.1,4.137Zm13.453-5.181,2.178-13.069H52.5l2.178,13.069-2.364,3.152Zm20.614,5.181H53.838l3.1-4.137a1.216,1.216,0,0,0,.226-.931l-2.33-13.982,1.13-1.13.356.356a1.217,1.217,0,0,0,.86.356h.086a1.217,1.217,0,0,0,.887-.487l6.892-9.189a6.071,6.071,0,0,1,5.518,6.026Z" fill="#65cc2a"/>
                            </g>
                        </g>
                    </svg>

                    <p class="mt-2">{{trans('about.Account')}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 bgclr4 text-white">
                <div class="who-data py-2 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70.248" height="70.248" viewBox="0 0 70.248 70.248">
                        <g id="Outline" transform="translate(-2 -2)">
                            <path id="Path_51" data-name="Path 51" d="M38.475,21.157,34.9,17.586l-3.571,3.571a21.3,21.3,0,0,1-15.162,6.28H15v1.171A37.915,37.915,0,0,0,29.063,58.153L34.9,62.9l5.841-4.745A37.915,37.915,0,0,0,54.807,28.608V27.437H53.636a21.3,21.3,0,0,1-15.162-6.28Zm.794,35.179L34.9,59.882l-4.365-3.546A35.568,35.568,0,0,1,17.36,29.751a23.615,23.615,0,0,0,15.628-6.938L34.9,20.9l1.915,1.915a23.615,23.615,0,0,0,15.628,6.938A35.568,35.568,0,0,1,39.268,56.336Z" transform="translate(2.22 2.662)" fill="#65cc2a"/>
                            <path id="Path_52" data-name="Path 52" d="M31.465,28.162a5.839,5.839,0,0,0-2.123,10.352v4.707a3.512,3.512,0,1,0,7.025,0V38.513a5.847,5.847,0,0,0-4.9-10.351Zm3.571,2.94a3.491,3.491,0,0,1-.429,5.774l-.585.338v6.006a1.171,1.171,0,0,1-2.342,0V37.215l-.585-.338a3.5,3.5,0,0,1,.894-6.439,3.807,3.807,0,0,1,.872-.095A3.459,3.459,0,0,1,35.036,31.1Z" transform="translate(4.27 4.44)" fill="#65cc2a"/>
                            <path id="Path_53" data-name="Path 53" d="M32.441,2H2V20.733H32.441ZM19.7,13.082a3.512,3.512,0,0,1-4.967,0L6,4.342H28.444ZM9.711,11.366,4.342,16.736V6Zm1.656,1.656,1.715,1.715a5.854,5.854,0,0,0,8.278,0l1.715-1.715,5.369,5.369H6ZM24.73,11.366,30.1,6V16.736Z" fill="#65cc2a"/>
                            <path id="Path_54" data-name="Path 54" d="M54.854,48.708A5.854,5.854,0,1,0,49,42.854a5.854,5.854,0,0,0,5.854,5.854Zm0-9.366a3.512,3.512,0,1,1-3.512,3.512A3.512,3.512,0,0,1,54.854,39.342Z" transform="translate(8.028 5.978)" fill="#65cc2a"/>
                            <path id="Path_55" data-name="Path 55" d="M56.537,48H54.2A8.206,8.206,0,0,0,46,56.2v8.2H64.733V56.2a8.206,8.206,0,0,0-8.2-8.2Zm5.854,14.05H48.342V56.2A5.861,5.861,0,0,1,54.2,50.342h2.342A5.861,5.861,0,0,1,62.391,56.2Z" transform="translate(7.515 7.857)" fill="#65cc2a"/>
                            <path id="Path_56" data-name="Path 56" d="M56.2,7.386V6H53.854V7.171H52.683V6H50.342V7.171H48V9.512h1.171v2.342H48V14.2h1.171v2.342H48v2.342h2.342V20.05h2.342V18.879h1.171V20.05H56.2V18.663a3.48,3.48,0,0,0,1.428-5.639A3.48,3.48,0,0,0,56.2,7.386ZM51.512,9.512h3.512a1.171,1.171,0,0,1,0,2.342H51.512Zm3.512,7.025H51.512V14.2h3.512a1.171,1.171,0,0,1,0,2.342Z" transform="translate(7.857 0.683)" fill="#65cc2a"/>
                            <path id="Path_57" data-name="Path 57" d="M53.708,2A11.708,11.708,0,1,0,65.416,13.708,11.708,11.708,0,0,0,53.708,2Zm0,21.074a9.366,9.366,0,1,1,9.366-9.366A9.366,9.366,0,0,1,53.708,23.074Z" transform="translate(6.832)" fill="#65cc2a"/>
                            <path id="Path_58" data-name="Path 58" d="M20.733,46H2V64.733H20.733Zm-5.854,2.342h3.512V60.736L7.854,50.2,4.342,53.711V48.342ZM4.342,57.022,7.854,53.51l8.882,8.882H4.342Z" transform="translate(0 7.515)" fill="#65cc2a"/>
                            <path id="Path_59" data-name="Path 59" d="M10,51.512A3.512,3.512,0,1,0,13.512,48,3.512,3.512,0,0,0,10,51.512Zm3.512-1.171a1.171,1.171,0,1,1-1.171,1.171A1.171,1.171,0,0,1,13.512,50.342Z" transform="translate(1.366 7.857)" fill="#65cc2a"/>
                        </g>
                    </svg>

                    <p class="mt-2">{{trans('about.personal')}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 bgclr5">
                <div class="who-data py-2 mt-4">
                    <svg id="_24-hours" data-name="24-hours" xmlns="http://www.w3.org/2000/svg" width="75.885" height="73.263" viewBox="0 0 75.885 73.263">
                        <g id="Group_60" data-name="Group 60" transform="translate(0 8.592)">
                            <g id="Group_59" data-name="Group 59">
                                <path id="Path_62" data-name="Path 62" d="M64.621,119.424a4.981,4.981,0,0,0-2.5-3.7l-13.127-7.384a5.18,5.18,0,0,0-6.182.849L38.2,113.8a2.714,2.714,0,0,1-3.517.274,85.926,85.926,0,0,1-17.27-17.27,2.715,2.715,0,0,1,.274-3.517l4.61-4.61a5.18,5.18,0,0,0,.849-6.182L15.76,69.371a4.98,4.98,0,0,0-3.7-2.5A5.288,5.288,0,0,0,7.576,68.4L2.714,73.261C-.721,76.7-.9,82.845,2.206,90.576c2.972,7.4,8.627,15.487,15.923,22.783s15.387,12.951,22.783,15.923a26.884,26.884,0,0,0,9.8,2.206,10.244,10.244,0,0,0,7.514-2.714l4.862-4.862A5.29,5.29,0,0,0,64.621,119.424Zm-3.272,2.749-.85.849-11.191-6.1a1.229,1.229,0,1,0-1.177,2.158l10.556,5.758-2.2,2.2c-2.655,2.655-8,2.642-14.66-.034-7.095-2.851-14.894-8.313-21.961-15.38S7.338,96.754,4.487,89.659C1.81,83,1.8,77.655,4.452,75l2.2-2.2,1.177,2.157a1.229,1.229,0,1,0,2.158-1.177L8.465,70.987l.849-.849a2.872,2.872,0,0,1,2.034-.862,2.82,2.82,0,0,1,.381.026,2.541,2.541,0,0,1,1.889,1.274L21,83.7a2.713,2.713,0,0,1-.445,3.238l-2.193,2.194L12.607,78.582a1.229,1.229,0,1,0-2.158,1.177l6.1,11.188-.6.6a5.187,5.187,0,0,0-.509,6.722,88.368,88.368,0,0,0,17.777,17.777,5.187,5.187,0,0,0,6.722-.509l.6-.6,2.791,1.523a1.229,1.229,0,0,0,1.177-2.158l-2.157-1.177,2.193-2.193a2.714,2.714,0,0,1,3.238-.445l13.127,7.384a2.541,2.541,0,0,1,1.274,1.889A2.851,2.851,0,0,1,61.349,122.173Z" transform="translate(0 -66.817)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_62" data-name="Group 62" transform="translate(45.892 19.667)">
                            <g id="Group_61" data-name="Group 61">
                                <path id="Path_63" data-name="Path 63" d="M322.664,153.343h-1.393V142.772a1.229,1.229,0,0,0-2.459,0v10.571H312.4l2.29-10.3a1.229,1.229,0,0,0-2.4-.533l-2.622,11.8a1.229,1.229,0,0,0,1.2,1.5h7.949v4.015a1.229,1.229,0,0,0,2.459,0V155.8h1.393a1.229,1.229,0,1,0,0-2.458Z" transform="translate(-309.634 -141.542)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_64" data-name="Group 64" transform="translate(31.469 19.668)">
                            <g id="Group_63" data-name="Group 63">
                                <path id="Path_64" data-name="Path 64" d="M224.042,158.589H215c.535-1.408,2.048-2.3,4.231-3.495,2.693-1.47,6.045-3.3,6.045-7.451a6.485,6.485,0,0,0-12.948,0,1.229,1.229,0,0,0,2.459,0,4.035,4.035,0,0,1,8.031,0c0,2.512-1.8,3.675-4.765,5.293-2.683,1.464-5.725,3.124-5.725,6.882a1.229,1.229,0,0,0,1.229,1.229h10.489a1.229,1.229,0,1,0,0-2.458Z" transform="translate(-212.323 -141.544)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_66" data-name="Group 66" transform="translate(20.979 0)">
                            <g id="Group_65" data-name="Group 65">
                                <path id="Path_65" data-name="Path 65" d="M189.74,60.005l-2.394.479a30.076,30.076,0,1,0-45.572-38.86,1.229,1.229,0,1,0,2.01,1.416,27.617,27.617,0,1,1,41.61,35.907l.548-2.74a1.229,1.229,0,1,0-2.411-.482l-1.311,6.556a1.229,1.229,0,0,0,1.446,1.446l6.556-1.311a1.229,1.229,0,1,0-.482-2.411Z" transform="translate(-141.55 -8.846)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_68" data-name="Group 68" transform="translate(44.581 5.245)">
                            <g id="Group_67" data-name="Group 67">
                                <path id="Path_66" data-name="Path 66" d="M302.018,44.232a1.229,1.229,0,0,0-1.229,1.229v2.622a1.229,1.229,0,1,0,2.459,0V45.461A1.229,1.229,0,0,0,302.018,44.232Z" transform="translate(-300.789 -44.232)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_70" data-name="Group 70" transform="translate(65.559 28.846)">
                            <g id="Group_69" data-name="Group 69">
                                <path id="Path_67" data-name="Path 67" d="M446.185,203.47h-2.622a1.229,1.229,0,0,0,0,2.459h2.622a1.229,1.229,0,0,0,0-2.459Z" transform="translate(-442.333 -203.47)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_72" data-name="Group 72" transform="translate(24.142 17.045)">
                            <g id="Group_71" data-name="Group 71">
                                <path id="Path_68" data-name="Path 68" d="M167,125.326l-2.271-1.311a1.229,1.229,0,0,0-1.229,2.129l2.271,1.311A1.229,1.229,0,0,0,167,125.326Z" transform="translate(-162.886 -123.85)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_74" data-name="Group 74" transform="translate(62.749 39.335)">
                            <g id="Group_73" data-name="Group 73">
                                <path id="Path_69" data-name="Path 69" d="M427.484,275.716l-2.271-1.311a1.229,1.229,0,1,0-1.229,2.129l2.271,1.311a1.229,1.229,0,0,0,1.229-2.129Z" transform="translate(-423.369 -274.24)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_76" data-name="Group 76" transform="translate(55.07 8.406)">
                            <g id="Group_75" data-name="Group 75">
                                <path id="Path_70" data-name="Path 70" d="M374.717,65.73a1.229,1.229,0,0,0-1.679.45l-1.311,2.271a1.229,1.229,0,1,0,2.129,1.229l1.311-2.271A1.229,1.229,0,0,0,374.717,65.73Z" transform="translate(-371.562 -65.565)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_78" data-name="Group 78" transform="translate(32.78 47.013)">
                            <g id="Group_77" data-name="Group 77">
                                <path id="Path_71" data-name="Path 71" d="M224.325,326.214a1.229,1.229,0,0,0-1.679.45l-1.311,2.271a1.229,1.229,0,1,0,2.129,1.229l1.311-2.271A1.229,1.229,0,0,0,224.325,326.214Z" transform="translate(-221.17 -326.049)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_80" data-name="Group 80" transform="translate(62.749 17.045)">
                            <g id="Group_79" data-name="Group 79">
                                <path id="Path_72" data-name="Path 72" d="M427.935,124.465a1.229,1.229,0,0,0-1.679-.45l-2.271,1.311a1.229,1.229,0,1,0,1.229,2.129l2.271-1.311A1.23,1.23,0,0,0,427.935,124.465Z" transform="translate(-423.37 -123.85)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_82" data-name="Group 82" transform="translate(24.142 39.335)">
                            <g id="Group_81" data-name="Group 81">
                                <path id="Path_73" data-name="Path 73" d="M167.45,274.855a1.229,1.229,0,0,0-1.679-.45l-2.271,1.311a1.229,1.229,0,1,0,1.229,2.129L167,276.535A1.23,1.23,0,0,0,167.45,274.855Z" transform="translate(-162.885 -274.24)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_84" data-name="Group 84" transform="translate(32.78 8.407)">
                            <g id="Group_83" data-name="Group 83">
                                <path id="Path_74" data-name="Path 74" d="M224.775,68.451l-1.311-2.271a1.229,1.229,0,1,0-2.129,1.229l1.311,2.271a1.229,1.229,0,1,0,2.129-1.229Z" transform="translate(-221.17 -65.565)" fill="#161616"/>
                            </g>
                        </g>
                        <g id="Group_86" data-name="Group 86" transform="translate(55.07 47.013)">
                            <g id="Group_85" data-name="Group 85">
                                <path id="Path_75" data-name="Path 75" d="M375.166,328.935l-1.311-2.271a1.229,1.229,0,1,0-2.129,1.229l1.311,2.271a1.229,1.229,0,1,0,2.129-1.229Z" transform="translate(-371.561 -326.049)" fill="#161616"/>
                            </g>
                        </g>
                    </svg>

                    <p class="mt-2">{{trans('about.Customer')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--skills-->
{{--@php--}}
{{--    dd($data['single_about'][0])--}}
{{--@endphp--}}
<div class="skills py-5">
    <div class="row no-gutters align-items-center">
        <div class="col-md-7 col-sm-12 pr-3">
            <div class="container m-auto">
                <div class="skills-data">
                    <div class="skills-title">
                        <h2 class="mainclr2">{{trans('about.our_skills')}}</h2>
                        {!! $data['single_about'][0]->$skills !!}
                    </div>

                    <div class="skills-progress">
{{--@php--}}
{{--dd(json_decode($data['single_about'][0]->$name))--}}
{{--@endphp--}}
@foreach(json_decode($data['single_about'][0]->$name) as  $skillsData)
                        <div class="my-3">
                            <div class="progress-data d-flex justify-content-between">
                                <span>{!! $skillsData!!} </span>
                                <span>{{ json_decode($data['single_about'][0]->number)[$loop -> index]}}</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bgclr2" role="progressbar" style="width: {{ json_decode($data['single_about'][0]->number)[$loop -> index]}};" aria-valuenow="{{  json_decode($data['single_about'][0]->number[$loop -> index])}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-5 col-sm-12">
            <div class="skills-img text-right">
                <picture>
                    <source srcset="{{URL::asset('public/images/skills.webp')}}" type="image/webp">
                    <source srcset="{{URL::asset('public/images/skills.jpg')}}" type="image/jpg">
                    <img class="img-fluid" src="{{URL::asset('public/images/skills.jpg')}}" alt="challenges">
                </picture>
            </div>
        </div>
    </div>
</div>

<!--challenges-->
<div id="challenges" class="challenges py-5 bgclr3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="challenges-img">
                    <picture>
                        <source srcset="{{URL::asset('public/images/slider.webp')}}" type="image/webp">
                        <source srcset="{{URL::asset('public/images/slider.jpg')}}" type="image/jpg">
                        <img class="img-fluid" src="{{URL::asset('public/images/slider.jpg')}}" alt="challenges">
                    </picture>
                </div>
            </div>

            @php
            @endphp
            <div class="col-md-6 col-sm-12">
                <div class="challenges-data">
                    <div class="accordion" id="accordionExample">
                        <div class="challenges-title">
                            <h2 class="mainclr2">{{trans('about.ready')}}</h2>
                        </div>
                        @foreach($data['single_challenge'] as $challenge)
                        <div class="card texk bg-transparent">
{{--                            @php--}}
{{--                            dd($data['single_challenge'][0])--}}
{{--                            @endphp--}}
                            <div class="card-header" id="heading{{$challenge-> id }}">
                                <h2 class="mb-0">
                                    <button class="btn mainclr2  bg-transparent" type="button" data-toggle="collapse" data-target="#collapse{{$challenge-> id }}" aria-expanded="true" aria-controls="collapse{{$challenge-> id }}">
                                       <span id="min1"></span>  {!! $challenge-> $challenge_name !!}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{$challenge-> id }}" class="collapse  bg-transparent @if($challenge-> id <= 1)  show @endif" aria-labelledby="heading{{$challenge-> id }}" data-parent="#accordionExample">
                                <div class="card-body bg-transparent text-white">
                                    {!! $challenge-> $challenge_text !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@section('script')


@endsection
@include('homepage.inc.start')
@include('homepage.map')
@include('homepage.inc.footr')
