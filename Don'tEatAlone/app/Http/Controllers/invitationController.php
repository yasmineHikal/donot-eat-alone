<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Auth;
use App\invitation;
use App\notification;
use App\User;
use App\Restaurant;
use App\Friend;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class invitationController extends Controller
{
    //

    public function storeInvitation(Request $request  ){

        $attributes=[

            'InvitationStartTime' => $request['InvitationStartTime'],
            'InvitationDate' => $request['InvitationDate'],
            'RestaurantId' => $request['RestaurantId'],
            'InvitationEndTime' => $request['InvitationEndTime'],
            'InvitationReceiverId' => $request['InvitationReceiverId'],
            'InvitationSenderId' =>Auth::user()->id,


            'InvitationResponse'=> 0,

        ];
        invitation::create($attributes);

        return back()->withFlashMessage('Invitation sent');
;

    }




public function getInvitations(Request $request){
        $invitations=DB::table('invitations')
            ->join('users','invitations.InvitationSenderId','=','users.id')
            ->join('restaurants','invitations.RestaurantId','=','restaurants.id')
            ->where('InvitationReceiverId',Auth::user()->id)
            ->where('InvitationResponse',0)
            //->orderBy('created_at','desc')
            ->select('invitations.*','users.*','restaurants.*')
            ->get();

    // dd($invitations);
        return view('users.invites',compact('invitations'));



    }




    public function approveInvitation( Request $request){

        //the InvitationResponse states will be (1) is  approved ..............

        $id= $request['InvitationId'];
                         $invitation = Invitation::where('InvitationId',$id)->first();

        $invitation->InvitationResponse = 1;
//        return $reservation;
                        $invitation->save();
     //******** MAKE THAT USER FRIEND IF INVITATION IS APPROVED **********//
        $attributes=[

            'UserOneId' =>$invitation->InvitationSenderId,
            'UserTwoId' =>$invitation->InvitationReceiverId,
            'Status' => 1,
        ];
        Friend::create($attributes);

     //******* SEND RESERVATION TO THE RESTAURANT ********************//
        $reservation=[

            'ReservationMakerId' =>$invitation->InvitationSenderId,
            'ReservationMaker2'   =>$invitation->InvitationReceiverId,
            'ReservationDate' =>$invitation->InvitationDate,
            'ReservationStartTime' =>$invitation->InvitationStartTime,
            'ReservationEndTime' =>$invitation->InvitationEndTime,
            'ReservationRestaurantId' =>$invitation->RestaurantId,
            'ReservationResponse' =>0

        ];
        Reservation::create($reservation);


        $notification=[

            'NotificationToId1' =>$invitation->InvitationSenderId,
            'NotificationToId2'   =>$invitation->InvitationReceiverId,

            'NotificationFormId' =>$invitation->RestaurantId,
            'type'=>'Uapprove'



        ];
        Notification::create($notification);

        return back()->withFlashMessage('Invitation approved');


    }


    public function rejectInvitation(Request $request){
        //the InvitationResponse states will be (2 ) is  ignored ..............
        $id= $request['InvitationId'];
        $invitation = Invitation::where('InvitationId',$id)->first();
        $invitation->InvitationResponse = 2 ;

        $invitation->save();

        return back()->withFlashMessage('Invitation rejected');




    }


}
