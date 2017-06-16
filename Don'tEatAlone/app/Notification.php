<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Notification extends Model
{
    //
    protected $table ="notifications";

    protected $fillable= [

        'type',  'ReservationData', 'ReservationStartTime','ReservationEndTime',
        'NotificationToId1','NotificationToId2', 'NotificationFormId'

    ];

   /** protected $appends= ['to','from'];


    public function getCreatedAtAttribute($value){



        return Carbon::parse($value)->diffForHumans();


    }

    public function getToAttribute(){

        return User::where('id',$this->NotificationToId)->first();


    }

    public function getFromAttribute(){


        return User::where('id',$this->NotificationFormId)->first();

    }
        **/
}
