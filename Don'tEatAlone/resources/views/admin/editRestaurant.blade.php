@extends('admin.layouts.layout')
@section('title')
Edit Restaurant
@endsection
@section('content')
<div class="portlet light portlet-fit portlet-form bordered">
<div class="portlet-title">
    <div class="caption">
        <i class=" icon-layers font-red"></i>
        <span class="caption-subject font-red sbold uppercase">EDIT RESTAURANT </span>
    </div>
    <div class="actions">
    </div>
</div>
<div class="portlet-body">
    <!-- BEGIN FORM-->
    {!! Form::open(['url'=>'restaurants/'.$restaurant->id,'method'=>'post','id'=>'form_sample_2', 'novalidate'=>'novalidate']) !!}
    {!! csrf_field() !!}
    <div class="form-body">
        <div class="form-group {{ $errors->has('RestaurantName') ? ' has-error' : '' }}">
            <div class="input-icon">
                <i class="fa fa-font"></i>
                {!! Form::text('RestaurantName',$restaurant->RestaurantName,['class'=>'form-control placeholder-no-fix','placeholder'=>'Restaurant Name','autocomplete'=>'off']) !!}
                @if ($errors->has('RestaurantName'))
                <span class="help-block">
                <strong>{{ $errors->first('RestaurantName') }}</strong>
                </span>
                @endif 
            </div>
        </div>
        <div class="form-group {{ $errors->has('RestaurantPhone') ? ' has-error' : '' }}">
            <div class="input-icon">
                <i class="fa fa-phone"></i>
                {!! Form::text('RestaurantPhone',$restaurant->RestaurantPhone,['class'=>'form-control placeholder-no-fix','placeholder'=>'Restaurant Phone','autocomplete'=>'off']) !!}
                @if ($errors->has('Email'))
                <span class="help-block">
                <strong>{{ $errors->first('RestaurantPhone') }}</strong>
                </span>
                @endif                   
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn green">submit</button>
                    </div>
                </div>
            </div>
            <!-- END FORM-->
        </div>
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
        @endif
        {!! Form::close() !!}
    </div>
    <!-- END CONTENT BODY -->
</div>
</div>
@endsection