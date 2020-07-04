
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
                        <h5 class="card-title">{{trans('blog.editblogcategory')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dblogcategory.update',[$data->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                 @method('put')
                                <div class="form-group">
                                    <label for="category_name_en">{{trans('blog.category_name_en')}}</label>
                                    <input type="text"   name="category_name_en"   value="{{$data->category_name_en}}" id="category_name_en" class="form-control">
                                    @if($errors->has('category_name_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('category_name_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="category_name_ar">{{trans('blog.category_name_ar')}}</label>
                                    <input type="text"   name="category_name_ar"   value="{{$data->category_name_ar}}" id="category_name_ar" class="form-control">
                                    @if($errors->has('category_name_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('category_name_ar')[0] }}</span>
                                    @endif
                                </div>

                                <br>
                                <button class="btn btn-success" type="submit">{{trans('blog.update')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
