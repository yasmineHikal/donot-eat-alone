@extends('users.layouts.layout')
@section('title')
messages
@endsection
@section('header')

  {!! Html::style('assets/apps/css/inbox.min.css') !!}


@endsection
@section('content')
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

@endsection