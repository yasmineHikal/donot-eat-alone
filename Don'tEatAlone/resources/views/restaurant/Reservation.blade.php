@extends('restaurant.layouts.layout')
@section('title')
reservations
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
                    @if(count($reservation)>0)
                    @foreach($reservation as $reserve)
                    <div class="row row-{{ $reserve->ReservationId }}"  >
                        <div class="mt-actions">
                            <div class="mt-action">
                                <div class="mt-action-img">
                                    <img  class="img-responsive" src="../uploads/{{$reserve->UserPhoto}}" />
                                </div>
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">{{$reserve->UserName}}</span>
                                                <p class="mt-action-desc"> {{$reserve->UserName}} want to make reservation </p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">{{$reserve->ReservationDate}}</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">{{$reserve->ReservationStartTime}} - {{$reserve->ReservationEndTime}}</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <input type="hidden" value="{{$reserve->ReservationId}}" name="id">
                                                <button type="button" id="" class="btn btn-outline green btn-sm approve">Approve</button>
                                                <button type="button" id="reject" class="btn btn-outline red btn-sm reject">Reject</button>
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
                        there is no reservation........
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
    $('.reject').on('click',function(event){
    event.preventDefault();
     var  id =  $('input[name=id]').val();
        $.ajax({
              method: 'GET',
              url: '/reject',
              data:{ReservationId:$('input[name=id]').val()  ,'_token': $('input[name=_token]').val() },
                success:function(data){

                     $( ".row-"+id ).remove();
                   }
    
        });
    
    });
    
    //var app = $('')
    $('.approve').on('click',function(event){
    
        event.preventDefault();
            var  id =  $('input[name=id]').val();
            $.ajax({
                  method: 'GET',
                  url: '/approve',
                  data:{ReservationId:$('input[name=id]').val()  ,'_token': $('input[name=_token]').val() },
                  success:function(data){

                        $( ".row-"+id ).remove();
                  }
    
        });
        });
    
</script>
@endsection