
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
                        <h5 class="card-title">{{trans('newservices.editservice')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dnewservices.update',[$data->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                 @method('put')

                                <div class="form-group">
                                    <label for="name_en">{{trans('newservices.name_en')}}</label>
                                    <textarea type="text"   name="name_en"   value="" id="name_en" class="form-control">{{$data->name_en}}</textarea>
                                    @if($errors->has('name_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="name_ar">{{trans('newservices.name_ar')}}</label>
                                    <textarea type="text"   name="name_ar"   value="" id="name_ar" class="form-control">{{$data->name_ar}}</textarea>
                                    @if($errors->has('name_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name_ar')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="text_en">{{trans('newservices.text_en')}}</label>
                                    <textarea   name="text_en"   value="" id="text_en" class="form-control">{{$data->text_en}}</textarea>
                                    @if($errors->has('text_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('text_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="text_ar">{{trans('newservices.text_ar')}}</label>
                                    <textarea   name="text_ar"   value="" id="text_ar" class="form-control">{{$data->text_ar}}</textarea>
                                    @if($errors->has('text_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('text_ar')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="slug_en">{{trans('newservices.slug_en')}}</label>
                                    <textarea   name="slug_en"   value="" id="slug_en" class="form-control">{{$data->slug_en}}</textarea>
                                    @if($errors->has('slug_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('slug_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="slug_ar">{{trans('newservices.slug_ar')}}</label>
                                    <textarea   name="slug_ar"   value="" id="slug_ar" class="form-control">{{$data->slug_ar}}</textarea>
                                    @if($errors->has('slug_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('slug_ar')[0] }}</span>
                                    @endif

                                </div>

                                <div class="input-group form-group control-group increment2" >
                                    <label for="images">{{trans('newservices.images')}}  </label>
                                    <input type="file" id="images" name="images" class="form-control">
                                    <p style="color:#3ac47d;">Old Image :{{$data->images}}</p>
                                    @if($errors->has('images'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                    @endif

                                    <div id="imageLink"></div>
                                </div>

                                <div class="input-group form-group control-group increment2" >
                                    <label for="single_images">{{trans('newservices.single_images')}}  </label>
                                    <input type="file" id="single_images" name="single_images" class="form-control">
                                    <p style="color:#3ac47d;">Old Single Image :{{$data->single_images}}</p>
                                    @if($errors->has('single_images'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('single_images')[0] }}</span>
                                    @endif

                                </div>

                                <div class="input-group form-group control-group increment2" >
                                    <label for="logo">{{trans('newservices.logo')}}  </label>
                                    <input type="file" id="logo" name="logo" class="form-control">
                                     <p style="color:#3ac47d;">Old Logo :{{$data->logo}}</p>
                                    @if($errors->has('logo'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('logo')[0] }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="sluginput_en">{{trans('newservices.sluginput_en')}}</label>
                                    <input type="text"   name="sluginput_en"   value="{{$data->sluginput_en}}" id="sluginput_en" class="form-control">
                                    @if($errors->has('sluginput_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('sluginput_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="sluginput_ar">{{trans('newservices.sluginput_ar')}}</label>
                                    <input type="text"   name="sluginput_ar"   value="{{$data->sluginput_ar}}" id="sluginput_ar" class="form-control"></input>
                                    @if($errors->has('sluginput_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('sluginput_ar')[0] }}</span>
                                    @endif

                                </div>
                                @include('dashboard.dashboardpages.newservices.seo_update')
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('newservices.updateservices')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
