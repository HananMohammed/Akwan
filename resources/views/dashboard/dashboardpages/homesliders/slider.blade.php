
@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">

        <div class="col-md-12">
            <div class="card-body">
                <h5 class="card-title">{{trans('slider.allSlides')}}</h5>
                <div class="main-card p-5 card">
                    <form method="post" action="{{route('dslider.store') }}" enctype="multipart/form-data"  >
                        @csrf
{{--                                                        @method('put')--}}
                        <div class="form-group">
                            <label for="text_ar">{{trans('slider.text_ar')}}</label>
                            <textarea type="text"    name="text_ar" id="text_ar" class="form-control"></textarea>
                            @if($errors->has('text_ar'))
                                {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                <span class="error">{{ $errors->get('text_ar')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="aboutEn">{{trans('slider.text_en')}}</label>
                            <textarea type="text"    name="text_en" id="text_en" class="form-control"></textarea>
{{--                            @if($errors->has('text_en'))--}}
{{--                                --}}{{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
{{--                                <span class="error">{{ $errors->get('text_en')}}</span>--}}
{{--                            @endif--}}
                        </div>
                        <div class="input-group form-group control-group increment2" >
                            <label for="image">{{trans('slider.image')}}  </label>
                            <input type="file" id="image" name="image" class="form-control">
                            @if($errors->has('image'))
                                {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                <span class="error">{{ $errors->get('image')}}</span>
                            @endif
                        </div>

                        <br>
                        <button class="btn btn-success" type="submit">{{trans('slider.addSlide')}}</button>
                     </form>
                </div>
            </div>
        </div>

    </div>
        </div>
    </div>
@endsection
