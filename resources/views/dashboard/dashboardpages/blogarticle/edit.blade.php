
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
                        <h5 class="card-title">{{trans('blog.addarticle')}}</h5>
                        <div class="main-card p-5 card">


{{--                            <form id="form" method="post"enctype="multipart/form-data" >--}}
{{--                                @csrf--}}
{{--                                <div class="input-group form-group control-group increment2" >--}}
{{--                                    <label for="images">{{trans('project.images')}}  </label>--}}
{{--                                    <input type="file" id="images" name="images[]" class="form-control">--}}

{{--                                    <div class="input-group-btn">--}}
{{--                                        <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>--}}
{{--                                    </div>--}}
{{--                                    @if($errors->has('images'))--}}
{{--                                        --}}{{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
{{--                                        <span class="error">{{ $errors->get('images')[0] }}</span>--}}
{{--                                    @endif--}}

{{--                                    <div id="imageLink"></div>--}}
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

{{--                            </form>--}}
                            <form method="post" action="{{ route('dblogarticle.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="article_en">{{trans('blog.article_en')}}</label>
                                    <input type="text"   name="article_en"   value="" id="article_en" class="form-control">
                                    @if($errors->has('article_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('article_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="article_ar">{{trans('blog.article_ar')}}</label>
                                    <input type="text"    name="article_ar"   value="" id="article_ar" class="form-control">
                                    @if($errors->has('article_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('article_ar')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="article_body_en">{{trans('blog.article_body_en')}}</label>
                                    <textarea    name="article_body_en"   value="" id="article_body_en" class="form-control"></textarea>
                                    @if($errors->has('article_body_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('article_body_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="article_body_ar">{{trans('blog.article_body_ar')}}</label>
                                    <textarea type="text"    name="article_body_ar"   value="" id="article_body_ar" class="form-control"></textarea>
                                    @if($errors->has('article_body_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('article_body_ar')[0] }}</span>
                                    @endif

                                </div>


                                <div style="width:100%;height: 10px;"></div>
{{-- {--                                <input type="submit" class="btn btn-primary" value="Save Images">--}}

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
                                <div class="form-group">
                                    <select name="category_id" class="form-control form-control-sm">
                                        <option>Select Category</option>
                                        @foreach($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->$name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))

                                        <span class="error">{{$errors->get('category_id')[0]}}</span>
                                    @endif
                                </div>
           @include('dashboard.dashboardpages.blogarticle.seo')
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('blog.addarticle')}}</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}


{{--        @section('script')--}}
{{--            <script>--}}

{{--                document.querySelector('#images').addEventListener('change', (event) => {--}}
{{--                    handleImageUpload(event)--}}
{{--                });--}}
{{--              var token = document.getElementsByName('_token');--}}

{{--              function handleImageUpload(event) {--}}
{{--              //    event.preventDefault();  //stop the form submitting--}}
{{--               var files = event.target.files[0]--}}
{{--                 var formData = new FormData()--}}
{{--           //   formData.append('files', files[0])--}}
{{--                  formData.append('myFile', files[0])--}}
{{--                //console.log(document.getElementById('form'));--}}
{{--                  fetch('/akwan/duploadImage', {--}}
{{--                      method: 'POST',--}}
{{--                      credentials: "same-origin",--}}
{{--                      headers: {--}}
{{--                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),--}}

{{--                          'Content-Type': 'multipart/form-data',--}}
{{--                      },--}}
{{--                      body:new FormData(document.getElementById('form')).append('myFile', files[0])--}}
{{--                      //new FormData(document.getElementById('form'))--}}
{{--                  })--}}
{{--                    // console.log(FormData(document.getElementById('#form')));--}}
{{--                      .then(response => response.json())--}}
{{--                      .then(data => {--}}
{{--                          console.log(data)--}}
{{--                      })--}}
{{--                      .catch(error => {--}}
{{--                          console.log(error)--}}
{{--                      })--}}
{{--                }--}}



{{--                // const handleImageUpload = event => {--}}
{{--                //     const files = event.target.files--}}
{{--                //     const formData = new FormData()--}}
{{--                //     formData.append('myFile', files[0])--}}
{{--                //--}}
{{--                //     fetch('/saveImage', {--}}
{{--                //         method: 'POST',--}}
{{--                //         body: formData--}}
{{--                //     })--}}
{{--                //         .then(response => response.json())--}}
{{--                //         .then(data => {--}}
{{--                //             console.log(data)--}}
{{--                //         })--}}
{{--                //         .catch(error => {--}}
{{--                //             console.error(error)--}}
{{--                //         })--}}
{{--                // }--}}


{{--                // $('#images').change(function(){--}}
{{--                //--}}
{{--                //     var imag = $(this).val();--}}
{{--                //     console.log(imag)--}}
{{--                //      fetch('../duploadImage/'+imag)--}}
{{--                //       .then((response) => {--}}
{{--                //              return response.json();--}}
{{--                //      })--}}
{{--                //       .then((myJson) => {--}}
{{--                //            var data--}}
{{--                //             for (var i=0;i<myJson.length;i++){--}}
{{--                //                // console.log(myJson[i]['id']);--}}
{{--                //               //  var id=myJson[i]['id'];--}}
{{--                //                 var imageLink = myJson[i]['images']--}}
{{--                //                 var link = new Option(imageLink);--}}
{{--                //                 //$(o).html("<option> </option>");--}}
{{--                //                 $("#imageLink").append(link);--}}
{{--                //             }--}}
{{--                //             console.log(myJson);--}}
{{--                //         });--}}
{{--                // });--}}
{{--                // //  console.log($('#brand'));--}}


{{--            </script>--}}

{{--@endsection--}}
