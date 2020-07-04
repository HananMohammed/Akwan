@php
    $about='about_'.trans('systems.lang');
//dd($data['about']->$about)
@endphp



<!--start of aboutUs-->
<div id="aboutUs" class="about-us py-5 bgclr3">
    <div class="container">
        <div class="row align-items-center no-gutters">
            <div class="col-md-6 col-sm-12">
                <div class="about-us-img text-center">
                    <picture>
                        <source  srcset="{{URL::asset('public/images/About-us.webp')}}" type="image/webp">
                        <source srcset="{{URL::asset('public/images/About-us.jpg')}}" type="image/jpg">
                        <img class="img-fluid" src="{{URL::asset('public/images/About-us.jpg')}}" alt="">
                    </picture>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 ">
                <div class="features-text  px-3 ml-5">
                    {!! $data['about']->$about !!}
                    <a href="{{URL::to('/about-us')}}" class="btn bg-transparent text-uppercase text-white">{{trans('features.read')}} <i class="{{trans('css.icon')}}"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>



<!--end of aboutUs-->



