
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
                        <h5 class="card-title">{{trans('blog.addimage')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dblogimage.store') }}" enctype="multipart/form-data" >
                                @csrf

                                                                <div class="input-group form-group control-group increment2" >
                                                                    <label for="images">{{trans('project.images')}}  </label>
                                                                    <input type="file" id="images" name="images" class="form-control">

                                                                    @if($errors->has('images'))
                                                                                                                        {{dd($errors->get('about_certificates_ar')[0])}}
                                                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                                                    @endif

                                                                </div>
                                <br>
                                <button class="btn btn-success" type="submit" style="margin-left: 40%;">{{trans('blog.addimage')}}</button>
                            </form>
@php
//dd($data[0]);
@endphp
                            <div class="row">
@if(count($data)>0)
    @foreach( $data as $img)


                            <div class="card col col-lg-3" style="width: 18rem;margin-top:40px;margin-left: 3%;">
                                <img src=" {{asset('public/image/'.$img->images)}}" class="card-img-top" alt="Blog Image" style="margin-top:20px;width:200px;height: 200px;">
                                <div class="card-body">
                                    @php
                               // dd( json_decode($img->images ,true));
                                     @endphp
                                    <h5 class="card-title text-danger">image Link</h5>
                                    <p class="card-text">{{URL::to('/')}}/public/image/{{$img->images}}</p>

{{--                                    <img src="{{asset('storage/'.$item->item_photo)}}" class="card-img-top" alt="..." style="height:250px;">--}}

                                    <div class="card-footer text-muted">
                                        <form method="post" action="{{route('dblogimage.destroy',[$img->id])}}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger " style="margin-left: 30%;">
                                                {{trans('tables.delete')}}
                                            </button>
                                        </form>
                                    </div>



                                </div>
                            </div>

@endforeach
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


