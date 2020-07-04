
@extends('dashboard.layaout.home')
{{--@php--}}
{{--//print_r($_REQUEST)--}}
{{--@endphp--}}
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('blog.editarticle')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dblogarticle.update',[$data->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                 @method('put')
                                <div class="form-group">
                                    <label for="article_en">{{trans('blog.article_en')}}</label>
                                    <input type="text"   name="article_en"   value="{{$data->article_en}}" id="article_en" class="form-control">
                                    @if($errors->has('article_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('article_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="article_ar">{{trans('blog.article_ar')}}</label>
                                    <input type="text"  name="article_ar"   value="{{$data->article_ar}}" id="article_ar" class="form-control">
                                    @if($errors->has('article_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('article_ar')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="article_body_en">{{trans('blog.article_body_en')}}</label>
                                    <textarea    name="article_body_en"   value="" id="article_body_en" class="form-control">{{$data->article_body_en}}</textarea>
                                    @if($errors->has('article_body_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('article_body_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="article_body_ar">{{trans('blog.article_body_ar')}}</label>
                                    <textarea type="text"    name="article_body_ar"   value="" id="article_body_ar" class="form-control">{{$data->article_body_ar}}</textarea>
                                    @if($errors->has('article_body_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('article_body_ar')[0] }}</span>
                                    @endif

                                </div>


{{--                                <div class="input-group form-group control-group increment2" >--}}
{{--                                    <label for="color">{{trans('project.images')}}  </label>--}}
{{--                                    <input type="file" id="imagename" name="images[]" class="form-control">--}}

{{--                                    <div class="input-group-btn">--}}
{{--                                        <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>--}}
{{--                                    </div>--}}
{{--                                    @if($errors->has('images'))--}}
{{--                                        --}}{{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
{{--                                        <span class="error">{{ $errors->get('images')[0] }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="clone2 hide">--}}
{{--                                    <div class="control-group input-group" style="margin-top:10px">--}}
{{--                                        <input type="file" name="images[]" class="form-control">--}}

{{--                                        @if($errors->has('images'))--}}
{{--                                            --}}{{--                                                {{dd($errors)}}--}}
{{--                                            <span class="error">{{ $errors->get('images')[0] }}</span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div style="width:100%;height: 10px;"></div>

                                <div class="input-group form-group control-group increment2" >
                                    <label for="images">{{trans('project.images')}}  </label>
                                    <input type="file" id="images" name="images" class="form-control">

                                    <div class="input-group-btn">
                                        <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                    @if($errors->has('images'))
                                        {{dd($errors->get('about_certificates_ar')[0])}}
                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                    @endif

                                    <div id="imageLink"></div>
                                </div>

                                @php
                                    $name='category_name_'.trans('systems.lang');

                                @endphp
                                @php
                                    $cat_name= 'category_name_'.trans('systems.lang');
                                @endphp
                                <div class="form-group">
                                    <select name="category_id" class="form-control form-control-sm">
                                        <option value ='{{$data->category_id}}'>{{$data->categoryname->$cat_name}}</option>
                                        @foreach($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->$name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))

                                        <span class="error">{{$errors->get('category_id')[0]}}</span>
                                    @endif
                                </div>

                                @include('dashboard.dashboardpages.blogarticle.seo_update')
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('blog.updatearticle')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
