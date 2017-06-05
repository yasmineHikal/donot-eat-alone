@extends('users.layouts.layout')
@section('title')
find partner
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
<!--   start search for partner  -->
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
                {!! Form::open(['url'=>'findPartner','method'=>'get']) !!}
                <label>City</label>
                {!! Form::select("UserCity",UserCity(), null ,['class' =>'form-control select2 input-large select2-hidden-accessible','placeholder'=>'Partner city']) !!}
                <label>Gender</label>
                {!! Form::select("Gender",Gender(), null ,['class' =>'form-control select2 input-large select2-hidden-accessible','placeholder'=>'gender']) !!}
                <label>Age From:</label>
                {!! Form::select("ageFrom",Age(), null ,['class' =>'form-control select2 input-large select2-hidden-accessible','placeholder'=>'gender']) !!}
                <label>To:</label>
                {!! Form::select("ageTo",Age(), null ,['class' =>'form-control select2 input-large select2-hidden-accessible','placeholder'=>'gender']) !!}
                {!! Form::submit("find Partner" ,['class'=>'btn btn-circle green'] ) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!--   end search for partner  -->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-body">
                <div class="mt-element-card mt-card-round mt-element-overlay">
                    <div class="row">
                        @if(count($foundPartners)>0)
                        @foreach($foundPartners as $partner)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="mt-card-item">
                                <div class="mt-card-avatar mt-overlay-1">
                                    <img  class="img-responsive" src="../uploads/{{$partner->UserPhoto}}" style="height: 154px">
                                </div>
          <input type="hidden" value="{{$partner->id}}" name="InvitationReceiverId" />

                                <div class="mt-card-content">
                                    <a href="{{url('/profile/'. $partner->id )}}">
                                        <h3 class="mt-card-name">{{$partner->UserName}}</h3>
                                    </a>
                                    <p class="mt-card-desc font-grey-mint">{{$partner->UserCity}},{{$partner->UserAge}} ,{{$partner->UserJob}} </p>
                                    <a  data-id="{{$partner->id}}" class="btn green btn-outline sbold uppercase invite" href="#form_modal2" data-toggle="modal"> Invite
                                    </a>



                                </div>
                            </div>
                        </div>

                        <div id="form_modal2" class="modal fade in" role="dialog" aria-hidden="true" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title">Invitation details</h4>
                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['url'=>'invitation','method'=>'post','class'=>'form-horizontal']) !!}
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Invitation Date</label>
                                            <div class="col-md-8">
                                                {!! Form::text('InvitationDate',null,['data-date-format'=>'yyyy-mm-dd','data-date-start-date'=>'-0d','class'=>'form-control input-group input-medium date date-picker ' ,'placeholder'=>'select a date ']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Time Range</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    {!! Form::text('InvitationStartTime',old('InvitationStartTime'),['class'=>'form-control timepicker timepicker-no-seconds']) !!}
                                                </div>
                                                <div class="input-group">
                                                    <span class="label label-sm label-success"> to </span>
                                                </div>

                                                <div class="input-group">
                                                    {!! Form::text('InvitationEndTime',old('InvitationEndTime'),['class'=>'form-control timepicker timepicker-no-seconds']) !!}
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                        </div>

                                        <!--         <div class="form-group">
                                            <label class="control-label col-md-4">Write message</label>
                                            <div class="col-md-8">
                                            <div class="input-group">
                                            {!! Form::textArea('message',old('message'),['class'=>'form-control','placeholder'=>'Enter your Message here.......... ','autocomplete'=>'off']) !!}

                                              </div>
                                              </div>
                                            </div> -->
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Select Restaurant</label>
                                            <div class="col-md-8">
                                                {!! Form::select("RestaurantId",restaurant() ,['class' =>'select2 input-large select2-hidden-accessible','tabindex'=>'-1']) !!}
                                            </div>
                                        </div>
                                        <input type="hidden" value="" name="InvitationReceiverId" id="InvitationReceiverId"/>
                                        <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                        {!! Form::submit("send Invitation" ,['class'=>'btn green' ] ) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class=" alert alert-danger">
                            Sorry ... No Partner Found
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="text-center">
                {{$foundPartners->render()}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')

<script>
    $('.invite').on('click', function (event) {

        event.preventDefault();
        //  alert('hi');
        var id = $(this).data('id');


        $('#InvitationReceiverId').val($(this).data('id'));


    });




</script>

{!! Html::script('assets/global/plugins/select2/js/select2.full.min.js') !!}
{!! Html::script('assets/pages/scripts/components-select2.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('assets/pages/scripts/components-date-time-pickers.min.js') !!}
@endsection