@extends('admin.layouts.layout')
@section('title')
Add Admin
@endsection
@section('content')
<div class="portlet light portlet-fit portlet-form bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-red"></i>
            <span class="caption-subject font-red sbold uppercase">Add Admin </span>
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <!-- BEGIN FORM-->
        {!! Form::open(['url'=>'addAdmin','method'=>'post','id'=>'form_sample_2', 'novalidate'=>'novalidate']) !!}
        {!! csrf_field() !!}
        <div class="form-body">
            <div class="form-group{{ $errors->has('UserName') ? ' has-error' : '' }}">
                <div class="input-icon">
                    <i class="fa fa-font"></i>
                    {!! Form::text('UserName',old('UserName'),['class'=>'form-control placeholder-no-fix','placeholder'=>'User Name','autocomplete'=>'off']) !!}
                    @if ($errors->has('UserName'))
                    <span class="help-block">
                    <strong>{{ $errors->first('UserName') }}</strong>
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
        {!! Form::close()!!}
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection
