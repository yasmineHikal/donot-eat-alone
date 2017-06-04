<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class notificationController extends Controller
{
    //Carbon::parse($value)->diffForHumans();
    public function getNotification(Request $request){

        $notifications=DB::table('notifications')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'notifications.NotificationToId2') ;
                //    ->oron('users.id', '=', 'notifications.NotificationToId2')  ;
            })
            ->join('restaurants','restaurants.id','=','NotificationFormId')

          //  ->join('users','NotificationToId1','=','users.id')
          //  ->join('users','NotificationToId2','=','users.id')
            ->select('notifications.*','restaurants.RestaurantName','restaurants.RestaurantPhoto','users.UserName')
            ->where('NotificationToId1',Auth::user()->id)
         //   ->where('type','Rapprove')

            ->get();

          // dd($notifications);
        return view('users.notification',compact('notifications'))   ;



    }


    /**
     * @param Request $request
     */
    public  function cancelNotification(Request $request){

        $id= $request['notificationId'];
        $notification = notification::where('id',$id)->first();

      //  dd($notification);

        $notification=[

            'NotificationToId2' =>$notification->NotificationToId1,
            'NotificationToId1'   =>$notification->NotificationToId2,

            'NotificationFormId' =>$notification->NotificationFormId,
            'type'=>'cancel'



        ];
        Notification::create($notification);

         notification::where('id',$id)->delete();



    }

}
