<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class notificationController extends Controller
{
    //Carbon::parse($value)->diffForHumans();
    public function getNotification(Request $request){

        $notifications=DB::table('notifications')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'notifications.NotificationToId1')
                    ->oron('users.id', '=', 'notifications.NotificationToId2')  ;
            })
            ->join('restaurants','restaurants.id','=','NotificationFormId')

          //  ->join('users','NotificationToId1','=','users.id')
          //  ->join('users','NotificationToId2','=','users.id')
            ->select('notifications.*','restaurants.RestaurantName','users.UserName')
            ->get();

          //  dd($notifications);
        return view('users.notification',compact('notifications'))   ;



    }

}
