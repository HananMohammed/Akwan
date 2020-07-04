@section('style')
    <style>
        .single-blog-title {padding: 10% 0 5% ;}
        .single-blog-img .container-fluid {width: 90%; margin: auto;}
        .single-blog-img img { height: 620px; width: 100%;}
        .all-blog-text .row { align-items: center;}
        .un-single-data h2 {    width: 84%;margin: auto; color: #0DA226; font-weight: 800;}
        .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled {display: none;}
        #BlogsTypes .item {position: relative;}
        .otherblogs-data-overlay
        {
            position: absolute;
            top: 110%;
            right: 0%;
            left: 0;
            bottom: -10%;
            width: 80%;
            margin: auto;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 10px;
            font-size: 16px;
            transition: all ease 0.5s;
            opacity: 0;
            transform: scale(0);
            z-index: 2;
        }
        #BlogsTypes .item:hover  .otherblogs-data-overlay
        {
            top: 10%;

            bottom: 10%;
            opacity: 1;
            transform: scale(1);
        }
        .otherblogs-data-overlay:after
        {
            content: '';
            z-index: 1;
            width: 50px;
            height: 50px;
            background-color: #000;
            transform: rotate(45deg);
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            margin: auto;
        }
        #BlogsTypes .col-md-3 {align-items: center; justify-content: center;}
        #BlogsTypes .col-md-3 .paginate-other-blogs ul {margin: 0}
        .paginate-other-blogs .page-item:first-child .page-link, .paginate-other-blogs  .page-item:last-child .page-link
        {
            border-radius: 0rem;
            border: 0;
            width: 50px;
            height: 50px;
            font-size: 40px;
            font-weight: 300;
            margin:  0 10px;
            align-items: center;
            justify-content: center;
            display: flex;
            background-color: #373737;
            color: #65CC2A;
        }
    </style>
@endsection

@include('homepage.inc.header')
<div id='logo2'>
    @include('homepage.inc.nave')
</div>
@php

    $category_name = 'category_name_'.trans('systems.lang');
    //dd($data['blog_Category'][0]->$category_name )
    $article_body = 'article_body_'.trans('systems.lang');
    $article = 'article_'.trans('systems.lang');
    $seo_keyword = 'seo_keyword_'.trans('systems.lang');
    $i=1;
@endphp
<div class="title-single">
    <div class="single-blog-title  bgclr3 text-center text-white">
        <h3 class="text-uppercase">{{trans('blog.how')}}</h3>
        <p class="mainclr2"> {!!date_format( $singleBlog -> created_at,"M/d/Y") !!}   | {{$data['blog_Category'][0]->$category_name}}</p>
    </div>

    <div class="single-blog-img">
        <div class="container-fluid">
            <picture>
                <source srcset="{{URL::asset('public/image').'/'. $singleBlog->images.'.webp'}}" type="image/webp">
                <source srcset="{{URL::asset('public/image').'/'. $singleBlog->images}}" type="image/png">
                <img src="{{URL::asset('public/image').'/'. $singleBlog->images}}" class="img-fluid" alt="blog image">
            </picture>
        </div>

    </div>
</div>


<div class="single-blog-data">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="all-blog-text mt-3">
                    {!! $singleBlog-> $article_body  !!}
                </div>
            </div>
        </div>
        <div class="row">
{{--            // dd($data['blog_Image'][0]->images);--}}
        </div>
    </div>
</div>








@include('homepage.other_blogs')
@include('homepage.inc.start')
@include('homepage.map')
@include('homepage.inc.footr')