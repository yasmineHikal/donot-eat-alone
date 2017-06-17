@extends('users.layouts.layout')
@section('title')
conversations
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
  <div class="row">
 {{--<div class="col-md-4 col-sm-4">
                             <div class="portlet light bordered">
                                 <div class="portlet-title tabbable-line">
                                     <div class="caption">
                                         <i class="icon-bubbles font-dark hide"></i>
                                         <span class="caption-subject font-dark bold uppercase">Conversation</span>
                                     </div>

                                 </div>
                                 <div class="portlet-body">
                                     <div class="tab-content">
                                         <div class="tab-pane active" id="portlet_comments_1">
                                             <!-- BEGIN: Comments -->
                                             <div class="mt-comments">
                                              @if(count($conversation)>0)
                                                                                      @foreach($conversation as $con)

                                                 <div class="mt-comment" >
                                                     <div class="mt-comment-img">
                                                         <img style="width: 45px " class="avatar" src="../uploads/{{$con->UserPhoto}}"> </div>
                                                     <div class="mt-comment-body">
                                                         <div class="mt-comment-info">
                                                             <span class="mt-comment-author">{{$con->Username}}</span>
                                                             <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                         </div>
                                                         <div class="mt-comment-text"> {{$con->MessageContent}}  </div>

                                                     </div>
                                                 </div>
                                                    @endforeach
                                                                   @else
                                                                                     <div class=" alert alert-danger">
                                                                                         there is no conversations........
                                                                                     </div>
                                                             @endif

                                             </div>
                                             <!-- END: Comments -->
                                         </div>

                                     </div>
                                 </div>
                             </div>
                         </div>  --}}
 <div class="col-md-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-hide hide"></i>
                                        <span class="caption-subject font-hide bold uppercase">Conversation</span>
                                    </div>
                                     <div class="actions">
                                    <div class="btn-arrow-link pull-right">
                                                        <a href="javascript:;">back</a>
                                                        <i class="icon-arrow-right"></i>
                                                                                                            </div>
                                </div>  </div>

                                <div class="portlet-body" id="chats">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 370px;"><div class="scroller" style="height: 370px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                                        <ul class="chats">

                                            <li class="in">
                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg">
                                                <div class="message">
                                                    <span class="arrow"> </span>
                                                    <a href="javascript:;" class="name"> Lisa Wong </a>
                                                    <span class="datetime"> at 20:11 </span>
                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                                <div class="message">
                                                    <span class="arrow"> </span>
                                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                                    <span class="datetime"> at 20:30 </span>
                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 309px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 216.346px;"></div>
                                    <div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 309px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 216.346px;">

                                    </div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    <div class="chat-form">
                                        <div class="input-cont">
                                            <input class="form-control" type="text" placeholder="Type a message here..."> </div>
                                        <div class="btn-cont">
                                            <span class="arrow"> </span>
                                            <a href="" class="btn blue icn-only">
                                                <i class="fa fa-check icon-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>

                        </div>
@endsection
@section('footer')

<script>
    $('.send').on('click', function (event) {

        event.preventDefault();

        var id = $(this).data('id');
        $.ajax({
            method: 'GET',
            url: 'invitation',
            data: {
                InvitationReceiverId: $('input[name=InvitationReceiverId]').val(),
                InvitationDate: $('input[name=InvitationDate]').val(),
                InvitationStartTime: $('input[name=InvitationStartTime]').val(),
                InvitationEndTime: $('input[name=InvitationEndTime]').val(),
                RestaurantId: $('input[name=RestaurantId]').val()
            }


        });

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


