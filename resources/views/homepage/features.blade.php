@php
$features='features_'.trans('systems.lang');
@endphp

<div id="features" class="features bgclr7 py-5">
    <div class="row align-items-center no-gutters">
        <div class="col-md-6 col-sm-12">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
{{--                    @php--}}
{{--                    dd($data['features'][0])--}}
{{--                    @endphp--}}
                    @for($i=0;   $i < count(json_decode($data['features'][0]->images)); $i++)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class=" @if ($i==0) active @endif "></li>

                    @endfor
                </ol>

                <div class="carousel-inner">
                    @php
                        $i=0;
                    @endphp
                    @foreach(json_decode($data['features'][0]->images, true) as $feature)
                    <div class="carousel-item features-img @if ($i==0) active @endif">
                        <picture>
                            <source srcset="{{URL::asset('public/image').'/'.$feature.'.webp'}}" type="image/webp">
                            <source srcset="{{URL::asset('public/image').'/'.$feature}}" type="image/jpeg">
                            <img class="d-block w-100" src="{{URL::asset('public/image').'/'.$feature}}" alt="features">
                        </picture>
                    </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 ">
            <div class="features-text px-3 ml-5">
                <p>{!! $data['features'][0]->$features !!}</p>
                <a href="about-us/" target="_blank" class="btn bg-transparent text-uppercase text-dark">{{trans('features.read')}} <i class="{{trans('css.icon')}}"></i></a>
            </div>
        </div>
    </div>
</div>