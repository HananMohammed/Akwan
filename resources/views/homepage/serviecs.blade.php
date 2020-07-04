<!--start of services-->
@php
    $title='title_'.trans('systems.lang');
    $description='description_'.trans('systems.lang');
    $route='s_'.trans('systems.lang');
    $name = 'name_'.trans('systems.lang');
    $text = 'text_'.trans('systems.lang');
   $slug= 'slug_'.trans('systems.lang');
@endphp

<div id="services" class="services bgclr3">
<div class="row no-gutters align-items-center">
    <div class="col-md-5  col-sm-12">
        <div class="container">
            <div class="services-text">
                <p class="text-white">{{trans('services.our')}}</p>
                <p class="mainclr2">{{trans('services.services')}}</p>
                <p class="text-white">{{trans('services.pro')}}</p>
                <a href="{{URL::to('/all-service')}}" class="btn mainclr1 px-0 d-flex align-items-center">{{trans('services.more')}}  <i class="{{trans('css.icon')}}"></i></a>
            </div>
        </div>
    </div>
    @php
    //dd($slug)
       $slug='sluginput_'.trans('systems.lang');
    @endphp
    <div class="col-md-7 col-sm-12">
        <div class="owl-carousel owl-theme">

            @foreach($data['homeServices'] as $service )
                <a href="{{URL::to('/single-service/'.$service->id).'-'.$service->$slug}}" target="_blank">
                    <div class="item">
                        <div class="service-img">
                            <picture>
                                <source srcset="{{URL::asset('public/image').'/'.$service->images.'.webp'}}" type="image/webp">
                                <source srcset="{{URL::asset('public/image').'/'.$service->images}}" type="image/webp">
                                <img src="{{URL::asset('public/image').'/'.$service->images}}" alt="service 1" class="img-fluid">
                            </picture>
                        </div>
                        <div class="service-slide-data">
                            <div>
                                <p class="mainclr2">{!! $service -> $name !!}</p>
                                {!! $service  -> $text!!}
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
</div>
