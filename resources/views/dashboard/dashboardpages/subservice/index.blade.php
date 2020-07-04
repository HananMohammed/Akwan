@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-6 m-t-5 ">
                    <a href="{{route('dsubservice.create')}}">  <button type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">{{trans('newservices.addsubservice')}} <i class="fas fa-plus"></i></button></a>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('newservices.allservices')}}</h5>
                        <div class="main-card p-5 card">
                            @if(count($data)>0)
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead>
                                    <tr>

                                        <th>{{trans('newservices.title_en')}}</th>
                                        <th>{{trans('newservices.title_ar')}}</th>
                                        <th>{{trans('newservices.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>


                                    </tr>
                                    </thead>
                                    <tbody>
{{--@php--}}
{{--$cat_name= 'category_name_'.trans('systems.lang');--}}
{{--@endphp--}}
                                @foreach($data as $article )
{{--                                        <tr>--}}
{{--                                            <td>{{$article->article_en}}</td>--}}
{{--                                            <td>{{$article->article_ar}}</td>--}}
{{--                                             <td>{{$article->categoryname->$cat_name}}</td>--}}
                                            <td>{{$article->name_en}}</td>
                                            <td>{{$article->name_ar}}</td>
                                            <td>{{$article->user->name}}</td>
                                            <td>{{$article->created_at}}</td>
                                            <td><a href="{{route('dsubservice.edit',[$article->id])}}" class="btn btn-primary">{{trans('tables.edit')}}</a></td>
                                            <td> <form method="post" action="{{route('dsubservice.destroy',[$article->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                        </tr>
                                @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>

                                        <th>{{trans('newservices.title_en')}}</th>
                                        <th>{{trans('newservices.title_ar')}}</th>
                                        <th>{{trans('newservices.createdBy')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th>{{trans('tables.edit')}}</th>
                                        <th>{{trans('tables.delete')}}</th>

                                    </tr>
                                    </tfoot>
                                </table>
                            @else
                                <p class="text-center font-weight-bold">No Sub Services Added</p>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

