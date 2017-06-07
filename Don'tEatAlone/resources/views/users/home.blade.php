@extends('users.layouts.layout')
@section('title')
Home
@endsection
@section('header')
{!! Html::style('assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}
{!! Html::style('assets/global/plugins/select2/css/select2.min.css') !!}
<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! Html::style('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') !!}
{!! Html::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
{!! Html::style('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') !!}
{!! Html::style('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') !!}
{!! Html::style('assets/global/plugins/clockface/css/clockface.css') !!}
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">Find partner</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <div class="col-sm-12">
                <!--select2-selection__placeholder -->
                {!! Form::open(['url'=>'findPartner','method'=>'get', 'class'=>'form-inline margin-bottom-10']) !!}
                   <label></label>
                {!! Form::select("UserCity",UserCity(), null ,['class' =>'form-control select input-small ','placeholder'=>'City']) !!}
                <label></label>
                {!! Form::select("Gender",Gender(), null ,['class' =>'form-control select input-small','placeholder'=>'Gender']) !!}
                 <label></label>
                {!! Form::select("ageFrom",Age(), null ,['class' =>'form-control select input-small','placeholder'=>'Age From']) !!}
                <label></label>
                {!! Form::select("ageTo",Age(), null ,['class' =>'form-control select input-small','placeholder'=>'Age To']) !!}
                 <label></label>

                {!! Form::submit("find Partner" ,['class'=>'btn btn-circle green'] ) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
{!! Html::script('assets/global/plugins/select2/js/select2.full.min.js') !!}
{!! Html::script('assets/pages/scripts/components-select2.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('assets/pages/scripts/components-date-time-pickers.min.js') !!}
@endsection