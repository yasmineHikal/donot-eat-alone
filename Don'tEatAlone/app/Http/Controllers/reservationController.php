<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use App\Reservation;
use Auth;
use App\invitation;
use App\User;
use App\Restaurant;



use Illuminate\Support\Facades\DB;
use App\Http\Requests;


class reservationController extends Controller
{
    //


    public function getReservations(Request $request){
        $reservation=DB::table('reservations')
            ->join('users','ReservationMakerId','=','users.id')
          //  ->join('users','ReservationMaker2','=','users.id')
            ->join('restaurants','reservations.ReservationRestaurantId','=','restaurants.id')
           // ->where('InvitationReceiverId',Auth::user()->id)
            ->where('ReservationResponse',0)  // the reservation states is still pending not approved or ignored.....
           // ->orderBy('created_at','desc')
            ->select('reservations.*','users.*','restaurants.*')
            ->get();

       //dd($reservation);
        return view('restaurant.reservation',compact('reservation'));


    }




    public function approveReservation( Request $request){

        //the reservation states will be (1) is  approved ..............

        $id= $request['ReservationId'];
        $reservation = Reservation::where('ReservationId',$id)->first();
        $reservation->ReservationResponse = 1;
//        return $reservation;
        $reservation->save();




        ///////   store notification/////////////

        $notification=[

            'NotificationToId1' =>$reservation->ReservationMakerId,
            'NotificationToId2'   =>$reservation->ReservationMaker2,
            'ReservationDate' =>$reservation->ReservationDate,
            'ReservationStartTime' =>$reservation->ReservationStartTime,
            'ReservationEndTime' =>$reservation->ReservationEndTime,
            'NotificationFormId' =>$reservation->ReservationRestaurantId


        ];
        Notification::create($notification);

        return back();
    }


    public function rejectReservation(Request $request){
        //the reservation states will be (2 ) is  ignored ..............
        $id= $request['ReservationId'];
        $reservation = Reservation::where('ReservationId',$id)->first();
        $reservation->ReservationResponse = 2 ;

        $reservation->save();

        return back();




    }



}
