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

        'IsRead', 'Content', 'Data', 'Time', 'NotificationToId', 'NotificationFormId'

    ];

    protected $appends= ['to','from'];


    public function getCreatedAtAttribute($value){



        return Carbon::parse($value)->diffForHumans();


    }

    public function getToAttribute(){

        return User::where('id',$this->NotificationToId)->first();


    }

    public function getFromAttribute(){


        return User::where('id',$this->NotificationFormId)->first();

    }

}
