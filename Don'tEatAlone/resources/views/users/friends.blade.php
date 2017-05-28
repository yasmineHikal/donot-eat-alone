@extends('users.layouts.layout')

@section('title')
Friends

@endsection


@section('content')


<div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">

                                        <span class="caption-subject font-green bold uppercase"> My Friends</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-card-round mt-element-overlay">
                                        <div class="row">
                                         @if(count($users)>0)
                                        @foreach($users as $user)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" >
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <img src="../uploads/{{$user->UserPhoto}}" style="height: 154px">

                                                    </div>
                                                    <div class="mt-card-content">
                                                        <a href="{{url('/profile/'. $user->id )}}"><h3 class="mt-card-name"></h3>{{$user->UserName}}</a>
                                                        <p class="mt-card-desc font-grey-mint">{{$user->UserAge}} years old , {{$user->UserCity}} ,{{$user->UserJob}}.</p>
                                                    <button type="button" class="btn btn-circle green btn-sm">  Message</button>


                                                </div>
                                            </div>
                                            </div>
                                            @endforeach
                                            @else
                                              <div class=" alert alert-danger">
                                              there is no friends........
                                          </div>
                                       @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>




@endsection