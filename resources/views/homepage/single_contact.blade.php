@section('style')
    <style>
        .contact-header{position: relative;}
        .contact-header-overlay
        {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            margin: 0;
        }
        .contact-header-overlay h2 {font-weight: 800;}
        .contact-data-title h1 {font-size: 50px; }
        .contact-data-title h1:last-child { font-family: 'Playfair Display', serif; font-weight: 800;}
        .contact-data-social .social {width: 100%; font-size: 40px;}
        .contact-side-data { width: 75%; margin: auto;  padding: 10% 0;}
        .offset-md-1 {margin-left: 5.333333%;}
        .form-control {border: solid 1px #161616;}
    </style>
@endsection
@include('homepage.inc.header')
<div id='logo2'>
    @include('homepage.inc.nave')
</div>

@php
    $ad='address_'.trans('systems.lang');
    $address = 'address_'.trans('systems.lang');
@endphp

<!--contact us header-->
<div class="contact-header text-center">
    <div class="contact-header-img">
        <picture>
            <source srcset="{{URL::asset('public/images/contact-header.webp')}}" type="image/webp">
            <source srcset="{{URL::asset('public/images/contact-header.jpg')}}" type="image/jpg">
            <img src="{{URL::asset('public/images/contact-header.jpg')}}" class="img-fluid" alt="contact-us header">
        </picture>
    </div>
    <div class="contact-header-overlay text-white">
        <h2 class="text-uppercase">{{trans('contactus.contact')}}</h2>
    </div>
</div>
<!--end of contact us header-->

<!--start of contact section-->
<section id="singleContactUs" class="pb-5" style="background-image: url('{{URL::asset("public/images/background-contactus.png")}}');background-size: cover; background-attachment: fixed;">
    <div class="container">
        <div class="row  justify-content-center align-items-center">
            <div class="col-md-5  d-none d-md-block bgclr3 py-5 text-white">
                <div class="contact-side-data">
                    <div class="contact-data-title mt-5">
                        <h1 class="mainclr1">{{trans('contactus.lets')}}</h1>
                        <h1 class="text-white">{{trans('contactus.Collaborate')}}</h1>
                    </div>
                    <div class="contact-data-info my-5">
                        <div class="contact-data-location">
                            <h4 class="mainclr1">{{trans('contactus.visit')}}</h4>
                            <p> {{$data['Address'][0]->$address}}</p>
                        </div>
                        <div class="contact-data-message my-5">
                            <h4 class="mainclr1">{{trans('contactus.messageus')}}</h4>
                            <p> {{$data['Email'][0]->mail}}</p>
                            @php
                                //dd($data)
                            @endphp
                            <p> {{$data['phone'][0]->phone}}</p>
                        </div>
                    </div>

                    <div class="contact-data-social">
                        <div class="social text-center mt-3">
                            <ul class="list-unstyled  my-1 d-flex justify-content-around">
                                @foreach($data['social'] as  $social)
                                    <li><a class="mainclr2" href="{{$social->link}}">{!! $social->socailIcon->icon !!}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 offset-md-1 offset-sm-0">
                <div class="formData  text-body text-sm-center">
                    <h4 class="mainclr1 mb-4">{{trans('contactus.message')}}</h4>
                    <form class="form text-muted text-center mt-2" action="{{route('phpmails')}} " method='post'>
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="{{trans('contactus.placeholder4')}}">
                            @if($errors->has('name'))
                                
                                <span class="error">{{ $errors->get('name')[0] }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" required class="form-control" placeholder="{{trans('contactus.placeholder2')}}">
                            @if($errors->has('phone_number'))
                               
                                <span class="error">{{ $errors->get('phone_number')[0] }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" required class="form-control" placeholder="{{trans('contactus.placeholder3')}}">
                            @if($errors->has('email_address'))
                               
                                <span class="error">{{ $errors->get('email_address')[0] }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="message" required class="form-control" rows="4" placeholder="{{trans('contactus.placeholder1')}}"></textarea>
                            @if($errors->has('message'))
                               
                                <span class="error">{{ $errors->get('message')[0] }}</span>
                            @endif
                        </div>
                        <input class="btn bgclr3 text-uppercase px-5 type1"   name="submit" type="submit" value="{{trans('contactus.submit')}}">
                    </form>
                    {{--                    <div class="container px-5">--}}
                    {{--                        <div class="row text-center align-items-center">--}}
                    {{--                            <div class="col-sm-12">--}}
                    {{--                                <div class="form-title mt-2">--}}
                    {{--                                    <h2 class="text-uppercase">{{trans('webnav.contact-1')}}</h2>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-12">--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>

        </div>
    </div>
</section>
<!--end of contact section-->
@include('homepage.map')
@include('homepage.inc.footr')
