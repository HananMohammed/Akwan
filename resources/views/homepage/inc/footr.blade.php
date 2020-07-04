
</section>
@php
    $about='about_'.trans('systems.lang');
    $address='address_'.trans('systems.lang');
    $features='features_'.trans('systems.lang');
@endphp
@php
    $ad='address_'.trans('systems.lang');
//{{--dd($data['features'][0]->$features)--}}
@endphp
<!--start of footer-->

<!--fixed social icons-->
<div id="fixedSocial" class="fixed-social social">
    <ul class="list-unstyled ">
        @foreach($data['social'] as  $social)
            <li class="my-1"><a class="mainclr2" target="_blank" href="{{$social->link}}">{!! $social->socailIcon->icon !!}</a></li>
        @endforeach
    </ul>
</div>
<!--top  button-->
<a id="top" class="bgclr2"></a>
<footer class="pt-4 bgclr3">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-md-3 col-sm-6">
                <div class="footerData text-center">
                    <div class="footerData-img mb-2">
                        <picture>
                            <source srcset="{{URL::asset('public/images/logo.webp')}}" type="image/webp">
                            <source srcset="{{URL::asset('public/images/logo.png')}}" type="image/png">
                            <img src="{{URL::asset('public/images/logo.png')}}" alt="Akwan logo">
                        </picture>
                    </div>
                    <ul class="list-unstyled mainclr2">
                        <li>  {!!  str_limit($data['features'][0]->$features, 220, '...') !!}</li>

                        <li>{{$data['phone'][0]->phone}}</li>
{{--                        <li>  {{$data['phone'][0]->phone }} </li>--}}
                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 mt-3">
                <div class="footerData">
                    <h3 class=" mb-1 mainclr2">{{trans('webnav.categories')}}</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{URL::to('/about-us')}}" target="_blank">{{trans('webnav.about')}}</a></li>
                        <li><a href="{{URL::to('/all-service')}}" target="_blank">{{trans('webnav.services')}}</a></li>
                        <li><a href="{{URL::to('/all-blogs')}}" target="_blank">{{trans('webnav.articles')}}</a></li>
                        <li><a href="{{URL::to('/contact-us')}}" target="_blank">{{trans('webnav.contact')}}</a></li>
                    </ul>
                </div>
            </div>

            <!--subscribe now-->
            <div class="col-md-4  col-sm-12 mt-3">
                <div class="footerData">
                    <h4 class="mb-3 text-white">{{trans('webnav.newsletter')}}</h4>
                    <form class="d-felx " action="{{route('subscriber.store')}}" method="post">
                        <div class="input-group subscribe-text mb-3 ">
                            @csrf
                            <input type="email" class="form-control border-0 py-4" name="mail" placeholder="{{trans('webnav.value1')}}" aria-label="Subscripe" aria-describedby="basic-addon2" required title="من فضلك ادخل بريد الكترونى صالح">

                            <div class="input-group-append send-mail d-flex">
                                <button class="input-group-text text-white btn btn-primary border-0 py-0 d-flex justify-content-center align-items-center" id="basic-addon2" type="submit"><span>&#62;</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('homepage.inc.socials',['data'=>$data['social'] ])
</footer>
<!--end of footer-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
{{--<script src="https://cdn.boomcdn.com/libs/wow-js/1.3.0/wow.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{URL::asset('public/js/index.js')}}"></script>
    @if (session()->get('locale')=='ar'||session()->get('locale')==null)
  <script src="{{URL::asset('public/js/indexar.js')}}"></script>
  @endif

{{--  @yield('script')--}}
{{--  @yield('script2')--}}
{{--  @yield('script3')--}}
{{--  @yield('script4')--}}
{{--  @yield('script5')--}}
{{--  @yield('script6')--}}

{{--    <script>--}}
{{--  var webp = new Image();--}}
{{--webp.onerror = function(){--}}
{{--for( var i=0;i<$('.backwebp').length;i++){--}}
{{--    var url=$('.backwebp')[i].getAttribute('imgscr')--}}
{{--    console.log(url)--}}
{{--   $('.backwebp')[i].style.backgroundImage="url("+url+")";--}}
{{--   }--}}
{{--};--}}
{{--webp.onload = function(){--}}
{{--   console.log($('.backwebp')[0].getAttribute('imgscr'))--}}
{{--   for( var i=0;i<$('.backwebp').length;i++){--}}
{{--    var url=$('.backwebp')[i].getAttribute('imgscr')+'.webp'--}}
{{--    console.log(url)--}}
{{--   $('.backwebp')[i].style.backgroundImage="url("+url+")";--}}
{{--   }--}}
{{--};--}}
{{--webp.src = 'data:image/webp;base64,UklGRjIAAABXRUJQVlA4ICYAAACyAgCdASoBAAEALmk0mk0iIiIiIgBoSygABc6zbAAA/v56QAAAAA==';--}}


{{-- </script>--}}
</body>
</html>
