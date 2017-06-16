@extends('users.layouts.layout')
@section('title')
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic" style="width: 30%" >
                    <img src="../uploads/{{$user->UserPhoto}}" height="300px" alt=""> 
                    <div class="label label-lg label-info" style="float:right;"><a href="/messages/{{$user->id}}" style="color:#fff;text-decoration: none;">Message</a></div>
                </div>

                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <br>
                <div class="profile-usertitle">
                    <div class="label label-sm label-danger"> {{$user->UserName}} </div>
                    <div class="label label-sm label-info">{{$user->UserJob}}</div>
                    <div class="label label-sm label-danger">{{$user->Gender}}</div>
                    <div class="label label-sm label-info">{{$user->UserAge}}</div>
                    <div class="label label-sm label-danger">{{$user->UserCity}}</div>
                </div>
                <br/>
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light ">
                <div>
                    <h4 class="label label-sm label-success">About {{$user->UserName}}  </h4>
                    <span class="profile-desc-text"> {{$user->UserAbout}}  </span>
                </div>
                <br/>
                <div>
                    <h4 class="label label-sm label-success"> Interests  </h4>
                    <span class="profile-desc-text">  {{$user->UserInterests}}  </span>
                </div>
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- END PROFILE CONTENT -->
    </div>
</div>
@endsection
@section('footer')
@endsection