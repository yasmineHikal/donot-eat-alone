@extends('admin.layouts.layout')
@section('title')
Add Restaurant
@endsection
@section('content')
<div class="portlet light portlet-fit portlet-form bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-red"></i>
            <span class="caption-subject font-red sbold uppercase">ADD RESTAURANT </span>
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <!-- BEGIN FORM-->
        {!! Form::open(['url'=>'addRestaurant','method'=>'post','id'=>'form_sample_2', 'novalidate'=>'novalidate']) !!}
        {!! csrf_field() !!}
        <div class="form-body">
            <div class="form-group {{ $errors->has('RestaurantName') ? ' has-error' : '' }}">
                <div class="input-icon">
                    <i class="fa fa-font"></i>
                    {!! Form::text('RestaurantName',old('RestaurantName'),['class'=>'form-control placeholder-no-fix','placeholder'=>'Restaurant Name','autocomplete'=>'off']) !!}
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
                    {!! Form::text('RestaurantPhone',old('RestaurantPhone'),['class'=>'form-control placeholder-no-fix','placeholder'=>'Restaurant Phone','autocomplete'=>'off']) !!}
                    @if ($errors->has('RestaurantPhone'))
                    <span class="help-block">
                    <strong>{{ $errors->first('RestaurantPhone') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="fa fa-envelope"></i>
                                {!! Form::email('email',old('email'),['class'=>'form-control placeholder-no-fix','placeholder'=>'Email','autocomplete'=>'off']) !!}
                                @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-icon">
                                <i class="fa fa-lock"></i>
                                {!! Form::password('password',['class'=>'form-control placeholder-no-fix','placeholder'=>'Password','autocomplete'=>'off']) !!}
                                @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
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
        {!! Form::close() !!}
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection
