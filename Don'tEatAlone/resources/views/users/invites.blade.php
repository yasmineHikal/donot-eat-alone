@extends('users.layouts.layout')
@section('title')
Invites
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-green bold uppercase"> Invites</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="mt-element-card mt-card-round mt-element-overlay">
                    @if(count($invitations)>0)
                    @foreach($invitations as $invite)
                    <div class="row row-{{$invite->InvitationId}}">
                        <div class="mt-actions">
                            <div class="mt-action">
                                <div class="mt-action-img">
                                    <img class="img-responsive" src="../uploads/{{$invite->UserPhoto}}"> 
                                </div>
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">{{$invite->UserName}}</span>
                                                <p class="mt-action-desc"> {{$invite->UserName}} Invites you to go with him to {{$invite->RestaurantName}} </p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">{{$invite->InvitationDate}}</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">{{$invite->InvitationStartTime}}-{{$invite->InvitationEndTime}}</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <input type="hidden" value="{{$invite->InvitationId}}" name="id">
                                                <a type="button" data-id="{{$invite->InvitationId}}" class="btn btn-outline green btn-sm approve ">Approve</a>
                                                <a type="button" data-id="{{$invite->InvitationId}}" class="btn btn-outline red btn-sm reject">Reject</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Completed -->
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class=" alert alert-danger">
                        there is no invitations........
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>
    $('.approve').on('click', function (event) {

        event.preventDefault();

        var id = $(this).data('id');

         // alert( $(this).data('id'));
   $.ajax({
            method: 'GET',
            url: '/approveInvitation',
            data: {
                InvitationId:$(this).data('id')
            },
            success: function (data) {

                $(".row-" + id).remove();
            }


        });

    });

$('.reject').on('click', function (event) {
    event.preventDefault();

    var id =$(this).data('id');
    $.ajax({
        method: 'GET',
        url: '/rejectInvitation',
        data: {
            InvitationId: $(this).data('id')
        },
        success: function (data) {

            $(".row-" + id).remove();
        }
    });

});


</script>
@endsection