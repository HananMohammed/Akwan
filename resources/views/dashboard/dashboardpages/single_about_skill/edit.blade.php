
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
                        <h5 class="card-title">{{trans('singleabout.addskills')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dskills.store') }}" enctype="multipart/form-data" >
                                @csrf

                                <div class="form-group">
                                    <label for="text_en">{{trans('singleabout.text_en')}}</label>
                                    <textarea type="text"   name="text_en"   value="{{ old('text_en') }}" id="text_en" class="form-control"></textarea>

                                    @if($errors->has('text_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('text_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="text_ar">{{trans('singleabout.text_ar')}}</label>
                                    <textarea type="text"   name="text_ar"   value="{{ old('text_ar') }}" id="text_ar" class="form-control"></textarea>

                                    @if($errors->has('text_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('text_ar')[0] }}</span>
                                    @endif

                                </div>


                                 <div class="form-group increment3 control-remove">
                                    <label for="name_en">{{trans('singleabout.name_en')}}</label>
                                    <input type="text"   name="name_en[]"   value="" id="name_en" class="form-control">
                                    @if($errors->has('name_en[]'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name_en[]')[0] }}</span>
                                    @endif

                                    <label for="name_ar">{{trans('singleabout.name_ar')}}</label>
                                    <input type="text"   name="name_ar[]"   value="" id="name_ar" class="form-control">
                                    @if($errors->has('name_ar[]'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name_ar[]')[0] }}</span>
                                    @endif


                                    <label for="number">{{trans('singleabout.number')}}</label>
                                    <input type="text"   name="number[]"   value="" id="number" class="form-control">
                                    @if($errors->has('number[]'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('number[]')[0] }}</span>
                                    @endif

                                    <div class="input-group-btn">
                                        <button class="btn btn-success add_collection" type="button"><i class="glyphicon glyphicon-plus"></i>Add New</button>
                                    </div>

                                </div>



                                <div class="clone3 hide control-remove">
                                    <div style="width:100%;height: 5px;background-color: #1c4b30;">

                                    </div>
                                    <div class="form-group">
                                        <label for="name_en">{{trans('singleabout.name_en')}}</label>
                                        <input type="text"   name="name_en[]"   value="" id="name_en" class="form-control">
                                        @if($errors->has('name_en'))
                                            {{dd($errors->get('about_certificates_ar')[0])}}
                                            <span class="error">{{ $errors->get('name_en')[0] }}</span>
                                        @endif

                                        <label for="name_ar">{{trans('singleabout.name_ar')}}</label>
                                        <input type="text"   name="name_ar[]"   value="" id="name_ar" class="form-control">
                                        @if($errors->has('name_ar'))
                                            {{dd($errors->get('about_certificates_ar')[0])}}
                                            <span class="error">{{ $errors->get('name_ar')[0] }}</span>
                                        @endif


                                        <label for="number">{{trans('singleabout.number')}}</label>
                                        <input type="text"   name="number[]"   value="" id="number" class="form-control">
                                        @if($errors->has('number'))
                                            {{dd($errors->get('about_certificates_ar')[0])}}
                                            <span class="error">{{ $errors->get('number')[0] }}</span>
                                        @endif
                                    </div>
                                    <div style="width:100%;height: 5px;background-color: #1c4b30;">
                                    </div>

                                    </div>


                                @include('dashboard.dashboardpages.single_about_skill.seo')
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('singleabout.addskills')}}</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
