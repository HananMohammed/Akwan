
@php
$title='title_'.trans('systems.lang');
$description='description_'.trans('systems.lang');
$text='text_'.trans('systems.lang');
@endphp

<header style="background-image: url({{URL::asset('public/image').'/'.$data['slides'][0]->image}}); background-size: 100% 100%;">
    <div class="header-overlay d-flex align-items-end " style=" background-image: linear-gradient(transparent, rgba(0, 0, 0, 0.50));">
        <div class="container pb-5">
            <dov class="row align-items-start">
                <div class="col-lg-6 pb-5">
                    <div class="header-text">
                        <p >{!! $data['slides'][0]->$text !!}</p>
                        <a href="{{URL::to('/contact-us')}}" target="_blank" class="btn text-uppercase bgclr2 type1">{{trans('getoffers.contact')}}</a>
                    </div>
                </div>
                <div class="col-sm-12 pt5 mb-auto">
                    <div class="header-scroll text-center">
                        <a href="#aboutUs" class="mainclr2">
                            <i class="icofont-scroll-bubble-down icofont-3x mainclr2"></i>
                        </a>
                    </div>
                </div>
            </dov>
        </div>
    </div>
</header>


@php
    $name='name_'.trans('systems.lang');

@endphp

@section('script')
{{--    <script>--}}
{{--        // brand id to class--}}
{{--        $('#brand').change(function(){--}}

{{--            var brandId = $(this).children("option:selected").val();--}}
{{--            // alert("You have selected the country - " + selectedCountry);--}}
{{--            //  console.log(brandId)--}}
{{--            fetch('getBrandClasses/'+brandId)--}}
{{--                .then((response) => {--}}
{{--                    return response.json();--}}
{{--                })--}}
{{--                .then((myJson) => {--}}
{{--                    var data;--}}
{{--                    for (var i=0;i<myJson.length;i++){--}}
{{--                        console.log(myJson[i]['id']);--}}
{{--                        var id=myJson[i]['id'];--}}
{{--                        var name=myJson[i]['name_en']--}}
{{--                        var o = new Option(name, id);--}}
{{--                        //$(o).html("<option> </option>");--}}
{{--                        $("#classname").append(o);--}}
{{--                    }--}}
{{--                    console.log(myJson);--}}
{{--                });--}}
{{--        });--}}
{{--        //  get cars--}}
{{--        $('#classname').change(function () {--}}

{{--            var classId = $(this).children("option:selected").val();--}}


{{--            fetch('GetCars/'+classId)--}}
{{--                .then((response) => {--}}
{{--                    return response.json();--}}
{{--                })--}}
{{--                .then((myJson) => {--}}
{{--                    console.log('-----------------')--}}

{{--                    console.log(myJson)--}}
{{--                    var data;--}}
{{--                    for (var i=0;i<myJson.length;i++){--}}
{{--                        console.log(myJson[i]['id']);--}}
{{--                        var id=myJson[i]['id'];--}}
{{--                        var name = myJson[i]['car_name_ar'];--}}
{{--                        var o = new Option(name, id);--}}
{{--                        //$(o).html("<option> </option>");--}}
{{--                        $("#carname").append(o);--}}
{{--                      //  $('#gocar').attr('href','{{URL::to("/car-gallery/")}}/'+id)--}}
{{--                    }--}}
{{--                    console.log(myJson);--}}
{{--                });--}}

{{--        });--}}
{{--        $("#carname").change(function(){--}}
{{--            console.log($(this).children("option:selected").val())--}}
{{--            var id=$(this).children("option:selected").val();--}}
{{--            $('#gocar').attr('href','{{URL::to("/car-gallery/")}}/'+id)--}}
{{--        })--}}

{{--    </script>--}}

@endsection