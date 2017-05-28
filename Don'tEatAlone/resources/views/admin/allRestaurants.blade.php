@extends('admin.layouts.layout')
@section('title')
All Restaurants
@endsection
@section('header')
{!! Html::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
{!! Html::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">@yield('title')</span>
                </div>
                <div class="tools"></div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="btn-group">
                                <a href="{{url('/addRestaurant')}}">
                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                <i class="fa fa-plus"></i>
                                </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th> Name </th>
                            <th> Joined </th>
                            <th> Phone </th>
                            <th> Added By </th>

                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($restaurants as $restaurant)
                        <tr class="odd gradeX">
                            <td>
                                {{$restaurant->id}}
                            </td>
                            <td>
                                {{$restaurant->RestaurantName}}
                            </td>
                            <td>
                                {{$restaurant->created_at}}
                            </td>
                            <td>
                                {{$restaurant->RestaurantPhone}}
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Admin ID ( {{$restaurant->AddBy }}  )  </span>
                            </td>

                            <th>

                                <a href="restaurants/{{$restaurant->id}}/delete" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection
@section('footer')
{!! Html::script('assets/pages/scripts/table-datatables-buttons.min.js') !!}
{!! Html::script('assets/global/scripts/datatable.js') !!}
{!! Html::script('assets/global/plugins/datatables/datatables.min.js') !!}
{!! Html::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
{!! Html::script('assets/pages/scripts/table-datatables-managed.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
@endsection