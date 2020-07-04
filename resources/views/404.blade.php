
@section('style')
    <style>
        #notFound {position: relative;}
        .notFound-img img{ width: 100% ;  height: 100vh;}
       .notFound-text
        {
            position: absolute;
            top: 40%;
            left: 10%;
        }
        .notFound-text h1 {font-size: 5rem;}
        .notFound-text p {font-weight: 300;font-size: 25px;}
    </style>
@endsection

@php
@endphp

@include('homepage.inc.header')



{{--style="background-image: url({{URL::asset('public/images/404.jpg')}}); background-size: cover;"--}}
<div id="notFound" >
    <div class="notFound-img">
        <picture>
            <source srcset="{{URL::asset('public/images/404.webp')}}" type="image/webp">
            <source srcset="{{URL::asset('public/images/404.jpg')}}" type="image/jpg">
            <img src="{{URL::asset('public/images/404.jpg')}}" class="img-fluid" alt="not found">
        </picture>
    </div>
    <div class="notFound-text text-white">
        <h1 class="mainclr2">404</h1>
        <p>{{trans('404.wanderer')}}</p>
        <p>{{trans('404.lost')}}</p>
        <a href="/akwan" class="btn bgclr2">{{trans('404.back')}}</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
