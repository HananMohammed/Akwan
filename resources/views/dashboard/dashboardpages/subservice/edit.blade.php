
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
                        <h5 class="card-title">{{trans('newservices.addsubservice')}}</h5>
                        <div class="main-card p-5 card">



                            <form method="post" action="{{ route('dsubservice.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="name_en">{{trans('newservices.title_en')}}</label>
                                    <input type="text"   name="name_en"   value="" id="name_en" class="form-control">
                                    @if($errors->has('name_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="name_ar">{{trans('newservices.title_ar')}}</label>
                                    <input type="text"   name="name_ar"   value="" id="name_ar" class="form-control">
                                    @if($errors->has('name_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name_ar')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="text_en">{{trans('newservices.text_en')}}</label>
                                    <textarea   name="text_en"   value="" id="text_en" class="form-control"></textarea>
                                    @if($errors->has('text_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('text_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="text_ar">{{trans('newservices.text_ar')}}</label>
                                    <textarea   name="text_ar"   value="" id="text_ar" class="form-control"></textarea>
                                    @if($errors->has('text_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('text_ar')[0] }}</span>
                                    @endif

                                </div>

                                <div class="input-group form-group control-group increment2" >
                                    <label for="images">{{trans('newservices.images')}}  </label>
                                    <input type="file" id="images" name="images" class="form-control">
                                    @if($errors->has('images'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                    @endif

                                    <div id="imageLink"></div>
                                </div>



                                <br>
                                <button class="btn btn-success" type="submit">{{trans('newservices.addservices')}}</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
