@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('features.feature')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dfeatures.store') }}" enctype="multipart/form-data"  >
                                @csrf
                                {{--                                @method('put')--}}
                                <div class="form-group">
                                    <label for="features_en">{{trans('features.feature_en')}}</label>
                                    <textarea type="text"    name="features_en" id="features_en" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="features_ar">{{trans('features.feature_ar')}}</label>
                                    <textarea type="text"    name="features_ar" id="features_ar" class="form-control"></textarea>
                                </div>
                                <div class="input-group form-group control-group increment2" >
                                    <label for="color">{{trans('project.images')}}  </label>
                                    <input type="file" id="imagename" name="images[]" class="form-control">

                                    <div class="input-group-btn">
                                        <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>{{trans('features.featureadd')}}</button>
                                    </div>
                                    @if($errors->has('images'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                    @endif
                                </div>

                                <div class="clone2 hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="images[]" class="form-control">

                                        @if($errors->has('images'))
                                            {{--                                                {{dd($errors)}}--}}
                                            <span class="error">{{ $errors->get('images')[0] }}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <button class="btn btn-success" type="submit">{{trans('features.addfeature')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
