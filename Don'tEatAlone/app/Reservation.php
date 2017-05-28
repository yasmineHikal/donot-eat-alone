<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;
use Carbon\Carbon;

class Reservation extends Model
{
    //
    protected $table ="reservations";
    protected $primaryKey = 'ReservationId';
    protected $fillable= [

        'ReservationData', 'ReservationStartTime','ReservationEndTime', 'ReservationMakerId', 'ReservationResponse','ReservationRestaurantId'

    ];

    protected $appends= ['maker','restaurant'];


    public function getCreatedAtAttribute($value){



        return Carbon::parse($value)->diffForHumans();


    }

    public function getMakerAttribute(){

        return User::where('id',$this->ReservationMakerId)->first();


    }


    public function getRestaurantAttribute(){


        return Restaurant::where('id',$this->ReservationRestaurantId)->first();

    }
}
