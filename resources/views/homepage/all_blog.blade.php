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
        .all-blog-sidebar-data input , .all-blog-sidebar-data .marg {width: 80%; margin: auto;}
        .all-blog-sidebar-data input , button.btn {
            border: solid 1px #707070;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;}
        .sidebar-search {background-color: transparent; border-radius: 0; color: #707070;}
        .category-img-data {position: relative;}
        .category-img-overlay
        {
            position: absolute;
            top: 80%;
            left: 0;
            right: 0;
            width: 50%;
            margin: auto;
            border-radius: 6px;
        }
        .category-img-overlay a {font-size: 10px; font-weight: 300;}
        .category-names li {font-size: 14px;}
        #BlogsTypes .item {position: relative; padding: 2px;}
        .otherblogs-data-overlay
        {
            position: absolute;
            top: 5%;
            right: 0;
            left: 0;
            bottom: 5%;
            width: 80%;
            margin: auto;
            opacity: 0;
            transform: scale(0);
            transition: all ease 0.5s;
        }
        #BlogsTypes .hov-dat:hover .otherblogs-data-overlay
        {
            opacity: 1;
            transform: scale(1);
        }
        .all-blog-tags-img img { padding: 5px;}
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
            $name='category_name_'.trans('systems.lang');
        //dd($data['blog_Category']->$category_name )
        //dd($data['otherblogs'])
        $i=1;
      //  $blog1 = 1;
      // dd($data['blog_Category'])
@endphp
<div id="allBlogs" class="all-blogs">
    <div class="container">
        <div class="row mt-sm-5">
            <div class="col-sm-8 mb-4">
                @if(count($allblog) > 0)
                <div class="all-blog-title text-center  ">
                    <h3 class="text-uppercase">{{trans('blog.how')}}</h3>
                    <p class="mainclr2">   {!!date_format( $allblog[0] -> created_at,"M/d/Y") !!} | {{$data['blog_Category'][0]->$category_name}}</p>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="all-blog-data">
                            <div class="all-blog-img">
                                <a href="{{URL::to('/single-blog/'.$allblog[0]->id)}}" target="_blank">
                                    <picture>
                                        <source srcset="{{URL::asset('public/image').'/'. $allblog[0]->images.'.webp'}}" type="image/webp">
                                        <source srcset="{{URL::asset('public/image').'/'. $allblog[0]->images}}" type="image/png">
                                        <img src="{{URL::asset('public/image').'/'. $allblog[0]->images}}" class="img-fluid" alt="blog image">
                                    </picture>
                                </a>

                            </div>
                            <div class="all-blog-text mt-3">
                                {!!  str_limit($allblog[0]-> $article_body, 700, '...') !!}

                            </div>
                        </div>
                        @else
                            <p>No data found</p>
                        @endif
                        <div class="all-blog-tags pt-5 mt-5">
                            <div class="d-flex justify-content-between align-items-center all-blog-tags-dat">
{{--                                @for($i=1 ;  count($data['allblogs']) <= $i ; $i++)--}}
{{--                                @foreach( count($data['allblogs'][$i]) as $allblogs)--}}
                                @if(count($allblog) > 1)
                                    <a href="{{URL::to('/single-blog/'.$allblog[1]->id)}}" target="_blank">
                                        <div class="all-blog-tags-img">
                                            <div>
                                                <picture>
                                                    <source srcset="{{URL::asset('public/image').'/'.$allblog[1]->images.'.webp'}}" type="image/webp">
                                                    <source srcset="{{URL::asset('public/image').'/'.$allblog[1]->images}}" type="image/png">
                                                    <img src="{{URL::asset('public/image').'/'.$allblog[1]->images}}" class="img-fluid" alt="blog image">
                                                </picture>
                                            </div>
                                            <div class="all-blog-tags-name">
                                                {{$allblog[1]->$article}}
                                            </div>
                                        </div>
                                    </a>
                                    @endif
                                @if(count($allblog) > 2)
                                    <a href="{{URL::to('/single-blog/'.$allblog[2]->id)}}" target="_blank">
                                        <div class="all-blog-tags-img">
                                            <div>
                                                <picture>
                                                    <source srcset="{{URL::asset('public/image').'/'.$allblog[2]->images.'.webp'}}" type="image/webp">
                                                    <source srcset="{{URL::asset('public/image').'/'.$allblog[2]->images}}" type="image/png">
                                                    <img src="{{URL::asset('public/image').'/'.$allblog[2]->images}}" class="img-fluid" alt="blog image">
                                                </picture>
                                            </div>
                                            <div class="all-blog-tags-name">
                                                {{$allblog[2]->$article}}
                                            </div>
                                        </div>
                                    </a>
                                @endif
                                @if(count($allblog) > 3)
                                    <a href="{{URL::to('/single-blog/'.$allblog[3]->id)}}" target="_blank">
                                        <div class="all-blog-tags-img">
                                            <div>

                                                <picture>
                                                    <source srcset="{{URL::asset('public/image').'/'.$allblog[3]->images.'.webp'}}" type="image/webp">
                                                    <source srcset="{{URL::asset('public/image').'/'.$allblog[3]->images}}" type="image/png">
                                                    <img src="{{URL::asset('public/image').'/'.$allblog[3]->images}}" class="img-fluid" alt="blog image">
                                                </picture>
                                            </div>
                                            <div class="all-blog-tags-name">
                                                {{$allblog[3]->$article}}
                                            </div>
                                        </div>
                                    </a>
                                @endif
                                <div class="pagination-allblogs">
                                    {{ $data['allblogs']->links('vendor.pagination.all_blogs') }}
                                    {{--                                    {{$data['allblogs']->appends(array_except(Request::query(), 'allblogs'))->links()}}--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-1 d-none d-md-block all-blog-sidebar">
                        <div class="row  border-row py-4">
                            <div class="col-sm-12 ">
                                <div class="all-blog-sidebar-data ">
                                    <h4 class="text-left mb-2 pb-2">{{trans('blog.search')}}</h4>
                                    <form method="post" action="{{route('blogserch')}}">
                                        @csrf
                                    <input type="text" name="search" class="form-control my-4 py-4" placeholder="{{trans('blog.placeholder1')}}">
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-12  mb-3">
                                <div class="all-blog-sidebar-data">
                                    <h4 class="text-left mb-2 pb-2">{{trans('blog.insta')}}</h4>
                                    <div  class="marg">
                                        <div id="instaPosts" class="row justify-content-center my-3 no-gutters">
{{--                                            @foreach($nonPrivateAccountMedias as $insta)--}}
{{--                                                <div class="col-md-4 col-sm-6 mb-2 px-1">--}}
{{--                                                    <div class="insta-images">--}}
{{--                                                        <img src="{{URL::asset('public/image').'/'.$insta}}" class="img-fluid" alt="blog image">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endforeach--}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12  mb-3">
                                <div class="all-blog-sidebar-data">
                                    <h4 class="text-left mb-2 pb-2">{{trans('blog.Categories')}}</h4>
                                    <div class="marg">
                                        <ul class="list-unstyled  category-names my-4">

{{--@php--}}
{{--    dd(count($allblog[0] )-> category_id )--}}
{{--                                            $data['blog_Category']--}}
{{--@endphp--}}
                                            @foreach($data['blog_Category'] as $Category)

                                                <li class="mt-2"><a href="{{URL::to('all-blogs').'/'.$Category->id}}" class="catBtn">{{$Category->$name}}{{--<span>({{$allBlogsCat[0]-> category_id }})</span>--}}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="category-img-data">
                                            <div class="category-img">
                                                <picture>
                                                    <source srcset="{{URL::asset('public/images/offers.webp')}}" type="image/webp">
                                                    <source srcset="{{URL::asset('public/images/offers.jpg')}}" type="image/jpg">
                                                    <img src="{{URL::asset('public/images/offers.jpg')}}" class="img-fluid" alt="blog image">
                                                </picture>
                                            </div>
                                            <div class="category-img-overlay text-center text-uppercase bgclr3">
                                                <a href="{{URL::to('/contact-us')}}" class="btn text-white" target="_blank">{{trans('blog.offer')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-sm-12 archive">--}}
{{--                                <div class="all-blog-sidebar-data">--}}
{{--                                    <h4 class="text-left mb-2 pb-2">{{trans('blog.archive')}}</h4>--}}
{{--                                    <div class="marg">--}}
{{--                                        <div class="dropdown">--}}
{{--                                            <button class="btn btn-secondary sidebar-search dropdown-toggle form-control my-4 py-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{trans('blog.month')}}</button>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                                <a class="dropdown-item" href="#">4</a>--}}
{{--                                                <a class="dropdown-item" href="#">5</a>--}}
{{--                                                <a class="dropdown-item" href="#">6</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                            <div class="col-sm-12  mt-3">
                                <div class="all-blog-sidebar-data tags text-center">
                                    <h4 class="text-left text-muted mb-2 pb-2">{{trans('blog.tags')}}</h4>
                                    <div class="slidebar-tags marg">
                                        <ul class="list-unstyled tags-list">
                                            @foreach($data['blog_article'] as $seo)
                                                <li>{{$seo ->$seo_keyword}}</li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
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
        </div>
    </div>
</div>

@include('homepage.other_blogs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

        $.ajax({
            url:"https://www.instagram.com/akwanmedia/?__a=1",
            type:'get',
            success:function(response){
                console.log(response)
                // $(".profile-pic").attr('src',response.graphql.user.profile_pic_url);
                //   $(".name").html(response.graphql.user.full_name);
                //   $(".biography").html(response.graphql.user.biography);
                //   $(".username").html(response.graphql.user.username);
                //   $(".number-of-posts").html(response.graphql.user.edge_owner_to_timeline_media.count);
                //   $(".followers").html(nFormatter(response.graphql.user.edge_followed_by.count));
                //   $(".following").html(nFormatter(response.graphql.user.edge_follow.count));
                posts = response.graphql.user.edge_owner_to_timeline_media.edges;
                posts_html = '';
                //console.log(posts)
                for(var i=0;i<6;i++){
                    url = posts[i].node.display_url;
                    shortCode = posts[i].node.shortcode;
                    console.log ("********************************");
                    console.log (posts[i]);
                   // likes = posts[i].node.edge_liked_by.count;
                  //  comments = posts[i].node.edge_media_to_comment.count;
                     posts_html += '<div class="col-md-4 col-sm-6 mb-2 px-1 equal-height">' +
                         '<a href="https://www.instagram.com/p/'+shortCode+'" target="_blank"><img src="'+url+'" class="img-fluid" alt="blog image"></a></div>';


                }
                $("#instaPosts").html(posts_html);
            }
        });
    </script>


@include('homepage.inc.start')
@include('homepage.map')
@include('homepage.inc.footr')
