@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('mission.mission')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dmission.update',[$missionarray->id]) }}"  >
                                @csrf
                        @method('put')
                                <div class="form-group">
                                    <label for="missionAr">{{trans('mission.missionAr')}}</label>
                                    <textarea type="text"    name="mission_ar" id="missionAr" class="form-control">{{$missionarray->mission_ar}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="missionEn">{{trans('mission.missionEn')}}</label>
                                    <textarea type="text"    name="mission_en" id="missionEn" class="form-control">{{$missionarray->mission_en}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="vissionAr">{{trans('mission.vissionAr')}}</label>
                                    <textarea type="text"    name="vission_ar" id="vissionAr" class="form-control">{{$missionarray->vission_ar}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="vissionEn">{{trans('mission.vissionEn')}}</label>
                                    <textarea type="text"    name="vission_en" id="vissionEn" class="form-control">{{$missionarray->vission_en}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="gooles_en">{{trans('mission.gooles_en')}}</label>
                                    <textarea type="text"    name="gooles_en" id="gooles_en" class="form-control">{{$missionarray->gooles_en}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gooles_ar">{{trans('mission.gooles_ar')}}</label>
                                    <textarea type="text"    name="gooles_ar" id="gooles_ar" class="form-control">{{$missionarray->gooles_ar}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="target_en">{{trans('mission.target_en')}}</label>
                                    <textarea type="text"    name="target_en" id="target_en" class="form-control">{{$missionarray->target_en}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="target_ar">{{trans('mission.target_ar')}}</label>
                                    <textarea type="text"    name="target_ar" id="target_ar" class="form-control">{{$missionarray->target_ar}}</textarea>
                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('mission.add')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
