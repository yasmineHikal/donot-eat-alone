@extends('users.layouts.layout')

@section('title')
notifications
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-green bold uppercase"> notifications</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="mt-element-card mt-card-round mt-element-overlay">
                    @if(count($notifications)>0)
                    @foreach($notifications as $notification)
                    <div class="row row-{{$notification->id}}">
                        <div class="mt-actions">
                            <div class="mt-action">
                             <div class="mt-action-img">
                                           <img class="img-responsive" src="../uploads/{{$notification->RestaurantPhoto}}">
                                                  </div>

                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-details ">

                                                <p class="mt-action-desc"> the Reservation in {{$notification->RestaurantName}} with {{$notification->UserName}}
                                                 @if($notification->type=='cancel')
                                                     is cancelled
                                                     @elseif($notification->type=='Rapprove')
                                                     is approved from restaurant
                                                     @else
                                                     is approved from partener
                                                      @endif

                                                 </p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">{{$notification->ReservationDate}}</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">{{$notification->ReservationStartTime}}-{{$notification->ReservationEndTime}}</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">

                                                <input type="hidden" value="{{$notification->id}}" name="id">


                                          @if($notification->type=='Rapprove)


                                             <input type="button" id="cancel" class="btn btn-outline green btn-sm cancel " value="cancel">
                                                @else

                                             <input type="hidden" id="cancel" class="btn btn-outline green btn-sm cancel " value="cancel">
                                                 @endif

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
                        there is no notifications........
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
    $('.cancel').on('click', function (event) {

        event.preventDefault();

        var id = $('input[name=id]').val();
        $.ajax({
            method: 'GET',
            url: '/cancelNotification',
            data: {
                notificationId: $('input[name=id]').val()
            },
            success: function (data) {

                $(".row-" + id).remove();
            }


        });

    });


</script>
@endsection