<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class notificationController extends Controller
{
    //Carbon::parse($value)->diffForHumans();
    public function getNotification(Request $request){

        $notification=DB::table('notification')
            ->



    }

}
