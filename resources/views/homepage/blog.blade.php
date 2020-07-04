


<div id="blog" class="blog bgclr3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center blog-title mb-4">
            <h2 class="text-white mb-0">  @if (session()->get('locale')=='ar'||session()->get('locale')==null) <span class="mainclr2">{{trans('blog.update')}}</span> @endif      {{trans('blog.blog')}} @if (session()->get('locale')=='en'||session()->get('locale')==null) <span class="mainclr2">{{trans('blog.update')}}</span> @endif</h2>
            <a href="{{URL::to('/all-blogs')}}">{{trans('blog.view')}} <i class="{{trans('css.icon')}}"></i></a>
        </div>
        <div class="row ">
            @php
            $article = 'article_'.trans('systems.lang');
            $categoryName = 'category_name_'.trans('systems.lang');
          // dd($data)
            @endphp
            @foreach($data['blog_article'] as $blog)
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <a href="{{URL::to('/single-blog/'.$blog->id)}}">
                    <div class="blog-data">
                        <div class="blog-data-img">
                            <picture>
                                <source srcset="{{URL::asset('public/image').'/'.$blog->images.'.webp'}}" type="image/webp">
                                <source srcset="{{URL::asset('public/image').'/'.$blog->images}}" type="image/png">
                                <img src="{{URL::asset('public/image').'/'.$blog->images}}" class="img-fluid" alt="blog image">
                            </picture>
                        </div>
                        <div class="blog-data-text px-2 py-4 ">

                            {!! str_limit($blog-> $article, 40, '...')  !!}
{{--                                {{$data['blog_Category'][$categoryName]}}--}}

                            <p class="text-muted mt-3"> {!!date_format( $blog -> created_at,"M/d/Y") !!}</p>

                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>
