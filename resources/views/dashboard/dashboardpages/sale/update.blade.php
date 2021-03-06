@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('sale.update')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dsale.update',[$data->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')


                                <div class="form-group">
                                    <label for="text_en">{{trans('sale.text_en')}}</label>
                                    <textarea type="text_en" value=""  name="text_en" id="text_en" class="form-control"> {{$data->text_en}} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text_ar">{{trans('sale.text_ar')}}</label>
                                    <textarea type="text_ar"   name="text_ar"  value="" id="text_ar" class="form-control">{{$data->text_ar}}</textarea>
                                </div>

                                @php
                                    $name='name_'.trans('systems.lang');

                                @endphp
                                <div class="form-group">
                                    <select id="brand" name="" class="form-control form-control-sm">
                                        <option>Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->$name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="classname"  name="" class="form-control form-control-sm">
                                        <option>----select car class---</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="carname" name="car_id" class="form-control form-control-sm">
                                        <option>----select car name---</option>

                                    </select>
                                </div>




                                <br>
                                <button class="btn btn-success" type="submit">{{trans('sale.update')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // brand id to class
        $('#brand').change(function(){

            var brandId = $(this).children("option:selected").val();
            // alert("You have selected the country - " + selectedCountry);
            //  console.log(brandId)
            fetch('../../getBrandClasses/'+brandId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    var data;
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name=myJson[i]['name_en']
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#classname").append(o);
                    }
                    console.log(myJson);
                });
        });
        //  get cars
        $('#classname').change(function () {

            var classId = $(this).children("option:selected").val();


            fetch('../../GetCars/'+classId)
                .then((response) => {
                    return response.json();
                })
                .then((myJson) => {
                    console.log('-----------------')

                    console.log(myJson)
                    var data;
                    for (var i=0;i<myJson.length;i++){
                        console.log(myJson[i]['id']);
                        var id=myJson[i]['id'];
                        var name = myJson[i]['car_name_ar'];
                        var o = new Option(name, id);
                        //$(o).html("<option> </option>");
                        $("#carname").append(o);
                    }
                    console.log(myJson);
                });

        });

    </script>

@endsection