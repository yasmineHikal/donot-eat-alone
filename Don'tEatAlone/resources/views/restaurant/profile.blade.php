@extends('restaurant.layouts.layout')
@section('title')
Profile
@endsection
@section('content')
<div class="row">
    <div class="col-md-3">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="../uploads/{{$restaurant->RestaurantPhoto}}" style="border-radius:50%;" class="img-responsive" alt=""> 
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">{{$restaurant->RestaurantName}}</div>
                    <div class="profile-usertitle-job"> {{$restaurant->RestaurantAddress}} </div>
                    <div class="profile-usertitle-name">  {{$restaurant->RestaurantPhone}}</div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR MENU -->
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
    </div>
    <!-- BEGIN PROFILE CONTENT -->
    <div class="col-md-9">
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                </li>
                                <li>
                                    <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    {!! Form::open(['url'=>'restaurantProfile/'.$restaurant->id,'class'=>'login-form' ,'method'=>'post']) !!}
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        {!! Form::text('RestaurantName',$restaurant->RestaurantName,['class'=>'form-control placeholder-no-fix']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Mobile Number</label>
                                        {!! Form::text('RestaurantPhone',$restaurant->RestaurantPhone,['class'=>'form-control placeholder-no-fix']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        {!! Form::text('RestaurantAddress',$restaurant->RestaurantAddress,['class'=>'form-control placeholder-no-fix']) !!}
                                    </div>
                                     <div class="margin-top-10">
                                        {!! Form::submit('Save',['class'=>'btn green']) !!}
                                    </div>
                                    {!! Form::close()!!}
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                                <!-- CHANGE AVATAR TAB -->
                                <div class="tab-pane" id="tab_1_2">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. 
                                    </p>
                                    {!! Form::open(['url'=>'uploadR/'.$restaurant->id,'method'=>'post','id'=>'form_sample_2', 'novalidate'=>'novalidate','enctype'=>'multipart/form-data','files' => true]) !!}
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div>
                                                <span class="btn default btn-file">
                                                <span class="fileinput-new"> </span>
                                                <span class="fileinput-exists">  </span>
                                                {!! Form::file('RestaurantPhoto') !!}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin-top-10">
                                        {!! Form::submit('Save',['class'=>'btn green']) !!}
                                    </div>
                                    {!! Form::close()!!}
                                </div>
                                <!-- END CHANGE AVATAR TAB -->
                                <!-- CHANGE PASSWORD TAB -->
                                <div class="tab-pane" id="tab_1_3">
                                    {!! Form::open( ['url'=>'editRPassword/'.Auth::user()->id,'method'=>'post','id'=>'form_sample_2', 'novalidate'=>'novalidate','enctype'=>'multipart/form-data']) !!}
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
                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <div class="controls">
                                            <div class="input-icon">
                                                <i class="fa fa-check"></i>
                                                {!! Form::password('password_confirmation',['class'=>'form-control placeholder-no-fix','placeholder'=>'Re-type Your Password','autocomplete'=>'off']) !!}
                                                @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin-top-10">
                                        {!! Form::submit('Change password',['class'=>'btn green']) !!}
                                    </div>
                                    {!! Form::close()!!}
                                </div>
                                <!-- END CHANGE PASSWORD TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
@endsection