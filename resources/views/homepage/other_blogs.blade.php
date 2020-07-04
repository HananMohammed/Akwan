
@section('style')
    <style>
        #allBlogs {background-color: #F6F6F6; padding:10%  0 5% 0; }
        #allBlogs input {background-color: transparent; border-radius: 0;}
        .all-blog-title  h3 {font-weight: 300;}
        .all-blog-img img {width: 100%;}
        .all-blog-tags {border-top: solid 2px #B5B5B5;}
        #BlogsTypes .items{ margin:  0 10px;}
        .border-row {border: solid 2px #B5B5B5;}
        .all-blog-sidebar-data h4 , .all-blog-sidebar-data ul li , .all-blog-sidebar-data ul li a  {color: #707070; }
        .tags ul li {display:  inline;     padding: 5px; font-size: 11px;}
        .all-blog-sidebar-data h4{border-bottom: solid 2px #B5B5B5;}
        #allBlogs .social {width: 100%;}
        #allBlogs .social ul li a {font-size: 35px;}
        .category-img-overlay a {font-size: 10px; font-weight: 300;}
        .category-names li {font-size: 14px;}
        /*#BlogsTypes .item {position: relative; padding: 2px;}*/
        /*.otherblogs-data-overlay*/
        /*{*/
        /*    position: absolute;*/
        /*    top: 5%;*/
        /*    right: 0;*/
        /*    left: 0;*/
        /*    bottom: 5%;*/
        /*    width: 80%;*/
        /*    margin: auto;*/
        /*    opacity: 0;*/
        /*    transform: scale(0);*/
        /*    transition: all ease 0.5s;*/
        /*}*/
        /*#BlogsTypes .items:hover .otherblogs-data-overlay*/
        /*{*/
        /*    opacity: 1;*/
        /*    transform: scale(1);*/
        /*}*/
        .all-blog-tags-img img { padding: 5px;}
        .otherblogs-data-overlay p{ font-size: 15px; }
        .pagination-allblogs .pagination
        {
            justify-content: space-between;
            align-items: center;
            width: 90%;
            margin: auto;

        }
        .all-blog-tags-dat {position: relative;}
        .pagination-allblogs
        {
            position: absolute;
            top: 5%;
            left: 0;
            right: 0;
            margin: auto;
        }
        .page-item .page-link ,  .page-item.disabled .page-link {color: #65CC2A;}
        #BlogsTypes .col-md-3{
            justify-content: center;
            align-items: center;
            display: flex !important;
        }
        .pagination {margin-bottom: 0;}
        .pagination-allblogs .page-item:last-child .page-link, .page-item:first-child .page-link
        {
            background-color: transparent;
            width: auto;
            height: auto;
            font-size: 22px;
            align-items: center;
            justify-content: center;
            display: flex;
            border: 0;
        }
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
        }
        .all-blog-tags-img {position: relative;}
        .all-blog-tags-name
        {
            position: absolute;
            top: 5%;
            bottom: 5%;
            left: 0;
            right: 0;
            width: 80%;
            display: flex;
            justify-content: center;
            font-size: 16px;
            color: #fff;
            align-items: center;
            margin: auto;
        }
        .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled {
            display: none !important;
        }
    </style>
@endsection


@php
    $category_name = 'category_name_'.trans('systems.lang');
    $article_body = 'article_body_'.trans('systems.lang');
    $article = 'article_'.trans('systems.lang');
    $seo_keyword = 'seo_keyword_'.trans('systems.lang');
@endphp

<div id="BlogsTypes" class="blog-types py-5  bgclr3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="owl-carousel owl-theme">
                    @foreach($data['otherblogs'] as $otherblogs)
                        <div class="item hov-dat">
                            <div>
                                <picture>
                                    <source srcset="{{URL::asset('public/image').'/'.$otherblogs->images.'.webp'}}" type="image/webp">
                                    <source srcset="{{URL::asset('public/image').'/'.$otherblogs->images}}" type="image/png">
                                    <img src="{{URL::asset('public/image').'/'.$otherblogs->images}}" class="img-fluid" alt="blog image">
                                </picture>
                            </div>

                            <div class="otherblogs-data-overlay bg-white d-flex justify-content-center align-items-center">
                                <p class="p-2">{{$otherblogs->$article}}</p>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
            <div class="col-md-3 d-md-flex mt-sm-3">
                <div class="paginate-other-blogs">
                    {{ $data['otherblogs']->links('vendor.pagination.other_blog') }}
                </div>
            </div>
        </div>

    </div>
</div>
