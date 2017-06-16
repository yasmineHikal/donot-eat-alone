@extends('users.layouts.layout')
@section('title')
messages
@endsection
@section('header')

  {!! Html::style('assets/apps/css/inbox.min.css') !!}


@endsection
@section('content')
<<<<<<< HEAD
<div class="inbox">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="inbox-body">
                                    <div class="inbox-header">
                                        <h1 class="pull-left">Messages</h1>

                                    </div>
<div class="inbox-content" style="">
<table class="table table-striped table-advance table-hover">

    <tbody>
     @if(count($conversation)>0)
           @foreach($conversation as $con)

       <tr data-id="{{$con->id}}">

            <td class="inbox-small-cells">
            <img class="contact-pic" style="width: 45px " src="../uploads/{{$con->UserPhoto}}">
            </td>
             <input type="hidden" value="{{$con->MessageSenderId}}" name="InvitationReceiverId" />


            <td class="view-message hidden-xs"> {{$con->Username}} </td>
            <td class="view-message "> {{$con->MessageContent}} </td>
            <td class="view-message inbox-small-cells">
           <a  data-id="{{$con->MessageSenderId}}" class="btn green btn-outline sbold uppercase invite" href="#form_modal2" data-toggle="modal">
                                  Reply   </a>

            </td>
            <td class="view-message text-right"> {{$con->created_at}} </td>
        </tr>

        <div id="form_modal2" class="modal fade in" role="dialog" aria-hidden="true" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">Reply</h4>
                                            </div>
                                                 <div class="modal-body">
                               {!! Form::open(['url'=>'sendMessage','method'=>'post','class'=>'form-horizontal']) !!}

                                                        <div class="form-group">
                                                    <label class="control-label col-md-4">Write message</label>
                                                    <div class="col-md-8">
                                                    <div class="input-group">
                                                    {!! Form::textArea('MessageContent',old('MessageContent'),['class'=>'form-control','placeholder'=>'Enter your Message here.......... ','autocomplete'=>'off']) !!}

                                                      </div>
                                                      </div>
                                                    </div>

                                                <input type="hidden" value="" name="InvitationReceiverId" id="InvitationReceiverId"/>
                                                <button   class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                {!! Form::submit("send Message" ,['class'=>'btn green' ] ) !!}
                                                {!! Form::close() !!}
                                            </div>
                                            </div>
                                            </div>
                                        </div>







          @endforeach

               @else
                    <div class=" alert alert-danger">
                          there is no Messages........
                     </div>
                 @endif



    </tbody>
</table></div>
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
          //   alert(id);

        $('#InvitationReceiverId').val($(this).data('id'));


    });

       function ReadMesage() {

                          var xhttp = new XMLHttpRequest();
                             xhttp.onreadystatechange = function() {
                               if (this.readyState == 4 && this.status == 200) {
                               document.getElementById("numMessage").innerHTML = this.responseText;
                               }
                             };
                             xhttp.open("GET", "navBarMessage", true);
                             xhttp.send();


                       }
      window.onload=ReadMesage();

</script>

=======
<div class="row">
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubble font-hide hide"></i>
                    <span class="caption-subject font-hide bold uppercase">Chats</span>
                </div>
                <div class="actions">
                    <div class="portlet-input input-inline">
                        <div class="input-icon right">
                            <i class="icon-magnifier"></i>
                            <input type="text" class="form-control input-circle" placeholder="search..."> 
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="portlet-body" id="chats">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 525px;">
                    <div class="scroller" style="height: 525px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                        @foreach($messages as $message)
                        <ul class="chats">
                            @foreach($receivers as $receiver)
                            <li class="out">
                                <img class="avatar" alt="" src="../uploads/{{$receiver->UserPhoto}}">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> {{$receiver->UserName}}</a>
                                    <span class="datetime">{{$message->created_at}}</span>
                                    <span class="body"> {{$message->MessageContent}}</span>
                                </div>
                            </li>
                            @endforeach
                            @foreach($senders as $sender)
                            <li class="in">
                                <img class="avatar" alt="" src="../uploads/{{$sender->UserPhoto}}">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> {{$sender->UserName}} </a>
                                    <span class="datetime"> {{$message->created_at}}</span>
                                    <span class="body" id="message"></span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @endforeach
                    </div>
                    <div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 461.683px;"></div>
                    <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                </div>
                {!! Form::open(['url'=>'sendMessage/'.$id,'method'=>'post']) !!}         
                {!! csrf_field()!!}
                    <div class="chat-form input-cont">
                        {!! Form::text('MessageContent',old('MessageContent'),['id'=>'MessageContent','class'=>'form-control','placeholder'=>'Type a message here...','autofocus'=>'', 'onblur'=>'notTyping()']) !!}
                    </div>
                    <div class="btn-cont">
                        <span class="arrow"> </span>
                        <button type='submit' class='btn blue icn-only' onclick='submitChat'>
                            <i class="fa fa-check icon-white"></i>
                    </button>
                    </div>
                {!! Form::close()!!}
            </div>
            <!--<script>
                function submitChat(){
                    if(form.MessageContent.value == ''){
                        return;
                    }
                    var form.MessageContent = form.MessageContent.value;
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState==4&&xmlhttp.status==200){
                            document.getElementById('message').innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open('POST','',true);
                    xmlhttp.send();
                }

            </script>-->
            
        </div>
        <!-- END PORTLET-->
    </div>
</div>
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1
@endsection