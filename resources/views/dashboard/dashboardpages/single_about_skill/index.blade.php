@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-6 m-t-5 ">
                    <a href="{{route('dskills.create')}}">  <button type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">{{trans('singleabout.addskills')}} <i class="fas fa-plus"></i></button></a>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('singleabout.allskills')}}</h5>
                        <div class="main-card p-5 card">
                            @if(count($data)>0)
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead>
                                    <tr>

                                        <th>{{trans('singleabout.name_en')}}</th>
                                        <th>{{trans('singleabout.name_ar')}}</th>

                                        <th>{{trans('tables.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $proj)

                                        <tr>

                                            @php
                                                // $name='name_'.trans('systems.lang');
                                                  $json =$proj->name_en;
                                                  $json2=$proj->name_ar;
                                                  $someArray = json_decode($json, true);
                                                   $someArray2 =json_decode($json2, true);
                                            @endphp

                                            <td>
                                                @foreach($someArray as $name_en )
                                                {{$name_en}}
                                                    <br>
                                                @endforeach

                                            </td>

                                            <td>
                                                @foreach($someArray2 as $name_ar )
                                                {{$name_ar}}<br>
                                                @endforeach
                                            </td>


                                            <td>{{$proj->user->name}}</td>
                                            <td>{{$proj->created_at}}</td>
                                            <td><a href="{{route('dskills.edit',[$proj->id])}}" class="btn btn-primary">{{trans('tables.edit')}}</a></td>
                                            <td> <form method="post" action="{{route('dskills.destroy',[$proj->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>

                                        <th>{{trans('singleabout.name_en')}}</th>
                                        <th>{{trans('singleabout.name_ar')}}</th>

                                        <th>{{trans('tables.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>

                                    </tr>
                                    </tfoot>
                                </table>
                            @else
                                <p class="text-center font-weight-bold">No projects Added</p>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
