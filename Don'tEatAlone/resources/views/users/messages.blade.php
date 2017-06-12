@extends('users.layouts.layout')
@section('title')
messages
@endsection
@section('content')
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
@endsection